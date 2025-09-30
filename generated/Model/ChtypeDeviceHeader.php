<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeDeviceHeader implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
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
    public function getName()
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name)
    {
        $this->name = $name;
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
        return ['name' => $this->name, 'value' => $this->value];
    }
}