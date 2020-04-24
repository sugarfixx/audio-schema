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
        if ($this->audioObject and $this->verifyObject() ) {
            return $this->buildNodes($this->audioObject->mappings);
        }
        return null;
    }

    private function buildNodes($mappings)
    {
        $returnable = [];
        foreach ($mappings as $mappedTrack) {
            $returnable[] = $mappedTrack->label;
        }

        return !empty($returnable) ? $returnable : null;
    }

    public function verifyObject()
    {
        if ($this->audioObject instanceof Audio) {
            return true;
        }
        return false;
    }
}
