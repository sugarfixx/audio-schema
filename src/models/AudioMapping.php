<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 06/04/2020
 * Time: 09:41
 */

class AudioMapping
{
    /**
     * @var int
     */
    public $mapping_index;
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $type;

    /**
     * @var MappedStream[]
     */
    public $streams;
}
