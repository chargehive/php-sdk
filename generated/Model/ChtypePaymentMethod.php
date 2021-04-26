<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePaymentMethod implements \JsonSerializable
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
    public function getSchema()
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
    public function setSchema(string $schema)
    {
        $this->schema = $schema;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJson()
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
    public function setJson(string $json)
    {
        $this->json = $json;
        return $this;
    }
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
     * @return string
     */
    public function getProvider()
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
    public function setProvider(string $provider)
    {
        $this->provider = $provider;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInputType()
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
    public function setInputType(string $inputType)
    {
        $this->inputType = $inputType;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['schema' => $this->schema, 'json' => $this->json, 'type' => $this->type, 'provider' => $this->provider, 'inputType' => $this->inputType];
    }
}