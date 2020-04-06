<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 06/04/2020
 * Time: 08:27
 */

class Language
{
    /**
     * @var String
     */
    public $iso_639_1;
    /**
     * @var String
     */
    public $iso_639_2;
    /**
     * @var String
     */
    public $rfc_5646;
    /**
     * @var String
     */
    public $name;
    /**
     * @var String
     */
    public $name_full;


    public function set($key, $value)
    {
        $this->{$key} = $value;
    }

    public function get($key)
    {
        return $this->{$key};
    }

}
