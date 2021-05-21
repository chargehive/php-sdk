<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConfigurationListRequest implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['kind' => $this->kind];
    }
}