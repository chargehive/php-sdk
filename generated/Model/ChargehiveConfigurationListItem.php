<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConfigurationListItem implements \JsonSerializable
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
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $disabled;
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
    /**
     * 
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }
    /**
     * 
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled)
    {
        $this->disabled = $disabled;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['kind' => $this->kind, 'id' => $this->id, 'description' => $this->description, 'disabled' => $this->disabled];
    }
}