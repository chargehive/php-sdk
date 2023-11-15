<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodRepairRequest implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $paymentMethodId;
    /**
     * 
     *
     * @var string
     */
    protected $bpid;
    /**
     * 
     *
     * @var string
     */
    protected $mfp;
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
    protected $pfp;
    /**
     * 
     *
     * @var string
     */
    protected $paymentScheme;
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
    protected $tokenType;
    /**
     * 
     *
     * @var string
     */
    protected $tokenExpiry;
    /**
     * 
     *
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }
    /**
     * 
     *
     * @param string $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(string $paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBpid()
    {
        return $this->bpid;
    }
    /**
     * 
     *
     * @param string $bpid
     *
     * @return self
     */
    public function setBpid(string $bpid)
    {
        $this->bpid = $bpid;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMfp()
    {
        return $this->mfp;
    }
    /**
     * 
     *
     * @param string $mfp
     *
     * @return self
     */
    public function setMfp(string $mfp)
    {
        $this->mfp = $mfp;
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
    public function getPfp()
    {
        return $this->pfp;
    }
    /**
     * 
     *
     * @param string $pfp
     *
     * @return self
     */
    public function setPfp(string $pfp)
    {
        $this->pfp = $pfp;
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
    public function getTokenType()
    {
        return $this->tokenType;
    }
    /**
     * 
     *
     * @param string $tokenType
     *
     * @return self
     */
    public function setTokenType(string $tokenType)
    {
        $this->tokenType = $tokenType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTokenExpiry()
    {
        return $this->tokenExpiry;
    }
    /**
     * 
     *
     * @param string $tokenExpiry
     *
     * @return self
     */
    public function setTokenExpiry(string $tokenExpiry)
    {
        $this->tokenExpiry = $tokenExpiry;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['paymentMethodId' => $this->paymentMethodId, 'bpid' => $this->bpid, 'mfp' => $this->mfp, 'name' => $this->name, 'pfp' => $this->pfp, 'paymentScheme' => $this->paymentScheme, 'tokenId' => $this->tokenId, 'tokenType' => $this->tokenType, 'tokenExpiry' => $this->tokenExpiry];
    }
}