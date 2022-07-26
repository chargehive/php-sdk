<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveStringTransport implements \JsonSerializable
{
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
        return ['value' => $this->value];
    }
}