<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 03/04/2020
 * Time: 11:27
 */
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/AudioData.php';

$schema = (object)['$ref' => 'file://' . realpath('sample-data/schema.json')];
$data = json_decode(file_get_contents('sample-data/data.json'));

$audioData = new AudioData();
$audioData->validate($schema, $data);
