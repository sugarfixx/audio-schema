<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 23/04/2020
 * Time: 16:25
 */

class VodPackageData
{
    /**
     * @var Audio
     */
    private $audioObject;
    /**
     * @param $audioObject
     */
    public function setAudioObject($audioObject)
    {
        $this->audioObject = $audioObject;
    }

    public function getAsset($assetId)
    {
        return null;
    }

    public function createFromAudioObject()
    {
        if ($this->audioObject) {
            $data = $this->buildNodes($this->audioObject);
            return json_encode($data);
        }
        return null;
    }

    private function buildNodes()
    {
        //
        return null;
    }
}
