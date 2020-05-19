<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 03/04/2020
 * Time: 11:27
 */

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/models.php';
require __DIR__ . '/AudioData.php';
require __DIR__ . '/VodPackageData.php';

$schema = (object)['$ref' => 'file://' . realpath('sample-data/audio-schema.json')];
$json = json_decode(file_get_contents('sample-data/audio-sample.json'));

// Instantiate AudioData object
$audioData = new AudioData();


if (isset($_GET['to-models'])) {
    // map json to model
    $audio = $audioData->parse($json);
    var_dump($audio);
    exit;
}
elseif (isset($_GET['view-json'])) {
    header('Content-Type: application/json');
    echo json_encode($json); exit;
}
elseif (isset($_GET['validate-schema'])) {
    $valid = $audioData->validate($json,$schema, true);
    var_dump($valid); exit;
}
elseif (isset($_GET['vod-package'])) {
    $audio = $audioData->parse($json);
    $vodPackage = new VodPackageData();
    $vodPackage->setAudioObject($audio);

    //var_dump($vodPackage->verifyObject());
    header('Content-Type: application/json');
    echo ($vodPackage->createFromAudioObject()); exit;

}

?>


Actions:
<ul>
    <li>
        <a href="?view-json">View JSON</a>
    </li>
    <li>
        <a href="?to-models">Parse Json Tp Models</a>
    </li>
    <li>
        <a href="?validate-schema">Validate Schema</a>
    </li>
    <li>
        <a href="?vod-package">Vod Package</a>
    </li>
</ul>

<br>
<hr>
References:
<ul>
    <li>
        <a href="https://mbnepms.atlassian.net/browse/MP-942" target="_blank">Multi Audio</a>
    </li>
    <LI>
        <a href="https://mbnepms.atlassian.net/browse/UP-22" target="_blank">Audio Model</a>
    </LI>
    <LI>
        <a href="https://mbnepms.atlassian.net/browse/UP-212" target="_blank">Audio Model Schema</a>
    </LI>
    <LI>
        <a href="https://mbnepms.atlassian.net/browse/EN-2043" target="_blank">Audio Playback api</a>
    </LI>
</ul>
