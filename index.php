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


$json = json_decode(file_get_contents('sample-data/audio-sample.json'));

$audioData = new AudioData();

// schemaValidation
$valid = $audioData->validate($schema, $json, true);
var_dump($valid);

// map json to model
// $json = json_decode(file_get_contents('sample-data/audio-sample.json'));
$audio = $audioData->parse($json);
var_dump($audio);
