<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 06/04/2020
 * Time: 14:54
 */

class Demo
{
    /**
     * Full name
     * @var string
     */
    public $name;

    /**
     * @var Address[]
     */
    public $address;
    /*
    public function setAddress($address)
    {
        $this->address = $address;
    }
    */
}

class Address
{
    /**
     * @var string
     */
    public $street;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $type;


}


