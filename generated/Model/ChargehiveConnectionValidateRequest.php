<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConnectionValidateRequest implements \JsonSerializable
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
     * @var string
     */
    protected $id;
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
    /**
     * 
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id)
    {
        $this->id = $id;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['kind' => $this->kind, 'id' => $this->id];
    }
}