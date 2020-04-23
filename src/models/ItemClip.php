<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 23/04/2020
 * Time: 16:00
 */

class ItemClip
{
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $tracks;

    public function set($key, $value)
    {
        $this->{$key} = $value;
    }

    public function get($key)
    {
        return $this->{$key};
    }
}
