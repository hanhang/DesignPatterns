<?php
namespace Patterns\Builder\Parts;

abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = array();

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function getShow()
    {
        var_dump($this->data);
    }
}