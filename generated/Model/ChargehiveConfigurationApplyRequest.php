<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConfigurationApplyRequest implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $data;
    /**
     * 
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data)
    {
        $this->data = $data;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['data' => $this->data];
    }
}