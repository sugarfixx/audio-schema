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
     * @var string
     */
    public $iso_639_1;
    /**
     * @var string
     */
    public $iso_639_2;
    /**
     * @var string
     */
    public $rfc_5646;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
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
