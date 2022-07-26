<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehivePCIBTokenizeResponse implements \JsonSerializable
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
    public function getTokenID()
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
    public function setTokenID(string $tokenID)
    {
        $this->tokenID = $tokenID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getToken()
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
    public function setToken(string $token)
    {
        $this->token = $token;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProfileFingerprint()
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
    public function setProfileFingerprint(string $profileFingerprint)
    {
        $this->profileFingerprint = $profileFingerprint;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMerchantFingerprint()
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
    public function setMerchantFingerprint(string $merchantFingerprint)
    {
        $this->merchantFingerprint = $merchantFingerprint;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['tokenID' => $this->tokenID, 'token' => $this->token, 'profileFingerprint' => $this->profileFingerprint, 'merchantFingerprint' => $this->merchantFingerprint];
    }
}