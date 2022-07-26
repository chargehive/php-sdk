<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehivechtypeLabel implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $label;
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
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * 
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
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
        return ['label' => $this->label, 'value' => $this->value];
    }
}