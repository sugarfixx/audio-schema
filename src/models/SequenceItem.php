<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 23/04/2020
 * Time: 15:57
 */

class SequenceItem
{
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $label;
    /**
     * @var ItemClip[]
     */
    public $clips;

    public function set($key, $value)
    {
        $this->{$key} = $value;
    }

    public function get($key)
    {
        return $this->{$key};
    }


}
