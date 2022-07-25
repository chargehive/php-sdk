<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePaymentMethod
{
    /**
     * 
     *
     * @var string
     */
    protected $schema = 'PAYMENT_METHOD_SCHEMA_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $json;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'PAYMENT_METHOD_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $provider = 'PAYMENT_METHOD_PROVIDER_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $inputType = 'INPUT_TYPE_INVALID';
    /**
     * 
     *
     * @return string
     */
    public function getSchema() : string
    {
        return $this->schema;
    }
    /**
     * 
     *
     * @param string $schema
     *
     * @return self
     */
    public function setSchema(string $schema) : self
    {
        $this->schema = $schema;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJson() : string
    {
        return $this->json;
    }
    /**
     * 
     *
     * @param string $json
     *
     * @return self
     */
    public function setJson(string $json) : self
    {
        $this->json = $json;
        return $this;
    }
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
     * @return string
     */
    public function getProvider() : string
    {
        return $this->provider;
    }
    /**
     * 
     *
     * @param string $provider
     *
     * @return self
     */
    public function setProvider(string $provider) : self
    {
        $this->provider = $provider;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInputType() : string
    {
        return $this->inputType;
    }
    /**
     * 
     *
     * @param string $inputType
     *
     * @return self
     */
    public function setInputType(string $inputType) : self
    {
        $this->inputType = $inputType;
        return $this;
    }
}