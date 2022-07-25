<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConfigurationListItem
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
    public function getKind() : string
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
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
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
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
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
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDisabled() : bool
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
    public function setDisabled(bool $disabled) : self
    {
        $this->disabled = $disabled;
        return $this;
    }
}