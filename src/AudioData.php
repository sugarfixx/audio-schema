<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 03/04/2020
 * Time: 11:29
 */

class AudioData
{
    public function validate($schema, $data)
    {
        $validator = new JsonSchema\Validator;
        $validator->validate($data, $schema);

        if ($validator->isValid()) {
            echo "The supplied JSON validates against the schema.\n";
        } else {
            echo "JSON does not validate. Violations:\n";
            foreach ($validator->getErrors() as $error) {
                echo sprintf("[%s] %s\n", $error['property'], $error['message']);
            }
        }
    }
}
