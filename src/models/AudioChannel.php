<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 06/04/2020
 * Time: 08:27
 */


class AudioChannel
{
    /**
     * @var integer
     */
    public $index;

    /**
     * @var string
     */
    public $description;

    /**
     * @var Language
     */
    public $language;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    public function set($key, $value)
    {
        $this->{$key} = $value;
    }

    public function get($key)
    {
        return $this->{$key};
    }
}
