<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 03/04/2020
 * Time: 11:29
 */


class AudioData
{
    public function validate($schema, $data , $verbose = false)
    {
        $validator = new JsonSchema\Validator;
        $validator->validate($data, $schema);

        if ($validator->isValid()) {
            $string = "The supplied JSON validates against the schema.\n";
            $valid = true;
        } else {
            $string = "JSON does not validate. Violations:\n";
            foreach ($validator->getErrors() as $error) {
                $string .= sprintf("[%s] %s\n", $error['property'], $error['message']);
            }
            $valid = false;
        }


        if ($verbose) {
            return $string;
        }
        else {
            return $valid;
        }
    }

    public function parse($json)
    {
        $mapper = new JsonMapper();
        return $mapper->map($json->audio, new Audio());
    }
}
