<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ProtobufAny implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $typeUrl;
    /**
     * 
     *
     * @var string
     */
    protected $value;
    /**
     * 
     *
     * @return string
     */
    public function getTypeUrl()
    {
        return $this->typeUrl;
    }
    /**
     * 
     *
     * @param string $typeUrl
     *
     * @return self
     */
    public function setTypeUrl(string $typeUrl)
    {
        $this->typeUrl = $typeUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value)
    {
        $this->value = $value;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['typeUrl' => $this->typeUrl, 'value' => $this->value];
    }
}