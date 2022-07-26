<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConnectionConfirmRequest implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $requestId;
    /**
     * 
     *
     * @var string
     */
    protected $verificationKey;
    /**
     * 
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }
    /**
     * 
     *
     * @param string $requestId
     *
     * @return self
     */
    public function setRequestId(string $requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVerificationKey()
    {
        return $this->verificationKey;
    }
    /**
     * 
     *
     * @param string $verificationKey
     *
     * @return self
     */
    public function setVerificationKey(string $verificationKey)
    {
        $this->verificationKey = $verificationKey;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['requestId' => $this->requestId, 'verificationKey' => $this->verificationKey];
    }
}