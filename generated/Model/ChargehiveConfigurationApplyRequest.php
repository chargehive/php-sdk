<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConfigurationApplyRequest
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
    public function getData() : string
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
    public function setData(string $data) : self
    {
        $this->data = $data;
        return $this;
    }
}