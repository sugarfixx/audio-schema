<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 03/04/2020
 * Time: 11:27
 */

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/models.php';
require __DIR__ . '/src/AudioData.php';

$schema = (object)['$ref' => 'file://' . realpath('sample-data/schema.json')];
$data = json_decode(file_get_contents('sample-data/data.json'));

// schemaValidation
/*
$audioData = new AudioData();
$audioData->validate($schema, $data);
*/

$json = json_decode(file_get_contents('sample-data/audio-sample.json'));
$mapper = new JsonMapper();
$audio = $mapper->map($json->audio, new Audio());
var_dump($audio);
