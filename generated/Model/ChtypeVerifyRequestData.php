<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeVerifyRequestData
{
    /**
     * 
     *
     * @var string
     */
    protected $type = 'VERIFY_REQUEST_TYPE_INVALID';
    /**
     * 
     *
     * @var string[]
     */
    protected $data;
    /**
     * 
     *
     * @var string
     */
    protected $connectorLibrary;
    /**
     * 
     *
     * @var string
     */
    protected $environment = 'ENVIRONMENT_INVALID';
    /**
     * 
     *
     * @var bool
     */
    protected $required;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getData() : \ArrayObject
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string[] $data
     *
     * @return self
     */
    public function setData(\ArrayObject $data) : self
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConnectorLibrary() : string
    {
        return $this->connectorLibrary;
    }
    /**
     * 
     *
     * @param string $connectorLibrary
     *
     * @return self
     */
    public function setConnectorLibrary(string $connectorLibrary) : self
    {
        $this->connectorLibrary = $connectorLibrary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnvironment() : string
    {
        return $this->environment;
    }
    /**
     * 
     *
     * @param string $environment
     *
     * @return self
     */
    public function setEnvironment(string $environment) : self
    {
        $this->environment = $environment;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRequired() : bool
    {
        return $this->required;
    }
    /**
     * 
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required) : self
    {
        $this->required = $required;
        return $this;
    }
}