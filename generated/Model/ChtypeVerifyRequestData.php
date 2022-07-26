<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeVerifyRequestData implements \JsonSerializable
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
    public function getType()
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
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getData()
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
    public function setData(\ArrayObject $data)
    {
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConnectorLibrary()
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
    public function setConnectorLibrary(string $connectorLibrary)
    {
        $this->connectorLibrary = $connectorLibrary;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnvironment()
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
    public function setEnvironment(string $environment)
    {
        $this->environment = $environment;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRequired()
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
    public function setRequired(bool $required)
    {
        $this->required = $required;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['type' => $this->type, 'data' => $this->data, 'connectorLibrary' => $this->connectorLibrary, 'environment' => $this->environment, 'required' => $this->required];
    }
}