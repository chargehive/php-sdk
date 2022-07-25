<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehivePCIBTokenizeResponse
{
    /**
     * 
     *
     * @var string
     */
    protected $tokenID;
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @var string
     */
    protected $profileFingerprint;
    /**
     * 
     *
     * @var string
     */
    protected $merchantFingerprint;
    /**
     * 
     *
     * @return string
     */
    public function getTokenID() : string
    {
        return $this->tokenID;
    }
    /**
     * 
     *
     * @param string $tokenID
     *
     * @return self
     */
    public function setTokenID(string $tokenID) : self
    {
        $this->tokenID = $tokenID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * 
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->token = $token;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProfileFingerprint() : string
    {
        return $this->profileFingerprint;
    }
    /**
     * 
     *
     * @param string $profileFingerprint
     *
     * @return self
     */
    public function setProfileFingerprint(string $profileFingerprint) : self
    {
        $this->profileFingerprint = $profileFingerprint;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMerchantFingerprint() : string
    {
        return $this->merchantFingerprint;
    }
    /**
     * 
     *
     * @param string $merchantFingerprint
     *
     * @return self
     */
    public function setMerchantFingerprint(string $merchantFingerprint) : self
    {
        $this->merchantFingerprint = $merchantFingerprint;
        return $this;
    }
}