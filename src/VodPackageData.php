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
            // only for to visualize sample
            $returnable[$mappedTrack->mapping_index] = [
                'label' =>$mappedTrack->label,
                'language' => 'default',
                'clips' => [
                    'type' => $mappedTrack->type,
                    'path' => 'file_path',
                    'tracks' => 'tracks'
                ]
            ];
        }

        return !empty($returnable) ? $this->formatResponse($returnable) : null;
    }

    private function formatResponse($data)
    {
        return json_encode([
            "sequences" => array_values($data)
        ]);
    }

    public function verifyObject()
    {
        if ($this->audioObject instanceof Audio) {
            return true;
        }
        return false;
    }
}
