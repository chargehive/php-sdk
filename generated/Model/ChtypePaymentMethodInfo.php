<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePaymentMethodInfo implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $tokenId;
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
    protected $paymentScheme;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $validFrom;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expiry;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'PAYMENT_METHOD_TYPE_INVALID';
    /**
     * 
     *
     * @var string[]
     */
    protected $info;
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
     * @var string
     */
    protected $status = 'STATUS_INVALID';
    /**
     * 
     *
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }
    /**
     * 
     *
     * @param string $tokenId
     *
     * @return self
     */
    public function setTokenId(string $tokenId)
    {
        $this->tokenId = $tokenId;
        return $this;
    }
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
    public function getPaymentScheme()
    {
        return $this->paymentScheme;
    }
    /**
     * 
     *
     * @param string $paymentScheme
     *
     * @return self
     */
    public function setPaymentScheme(string $paymentScheme)
    {
        $this->paymentScheme = $paymentScheme;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }
    /**
     * 
     *
     * @param \DateTime $validFrom
     *
     * @return self
     */
    public function setValidFrom(\DateTime $validFrom)
    {
        $this->validFrom = $validFrom;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpiry()
    {
        return $this->expiry;
    }
    /**
     * 
     *
     * @param \DateTime $expiry
     *
     * @return self
     */
    public function setExpiry(\DateTime $expiry)
    {
        $this->expiry = $expiry;
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
     * @return string[]
     */
    public function getInfo()
    {
        return $this->info;
    }
    /**
     * 
     *
     * @param string[] $info
     *
     * @return self
     */
    public function setInfo(\ArrayObject $info)
    {
        $this->info = $info;
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
    /**
     * 
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['tokenId' => $this->tokenId, 'name' => $this->name, 'paymentScheme' => $this->paymentScheme, 'validFrom' => $this->validFrom, 'expiry' => $this->expiry, 'type' => $this->type, 'info' => $this->info, 'provider' => $this->provider, 'inputType' => $this->inputType, 'status' => $this->status];
    }
}