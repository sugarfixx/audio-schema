<?php
/**
 * Created by PhpStorm.
 * User: sugarfixx
 * Date: 06/04/2020
 * Time: 08:26
 */

        
class AudioStream
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $bit_depth;

    /**
     * @var integer
     */
    public $bit_rate;

    /**
     * @var string
     */
    public $bit_rate_mode;

    /**
     * @var AudioChannel[]
     */
    public $channels;

    /**
     * @var string
     */
    public $codec_id;

    /**
     * @var string
     */
    public $endianess;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $sample_rate;

    /**
     * @var integer
     */
    public $stream_index;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $wrapping;


    public function set($key, $value)
    {
        $this->{$key} = $value;
    }

    public function get($key)
    {
        return $this->{$key};
    }
}
