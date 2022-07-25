<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveTransportKeyRetrieveResponse
{
    /**
     * 
     *
     * @var bool
     */
    protected $success;
    /**
     * 
     *
     * @var string
     */
    protected $transportKeyId;
    /**
     * 
     *
     * @var string
     */
    protected $publicKey;
    /**
     * 
     *
     * @return bool
     */
    public function getSuccess() : bool
    {
        return $this->success;
    }
    /**
     * 
     *
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess(bool $success) : self
    {
        $this->success = $success;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransportKeyId() : string
    {
        return $this->transportKeyId;
    }
    /**
     * 
     *
     * @param string $transportKeyId
     *
     * @return self
     */
    public function setTransportKeyId(string $transportKeyId) : self
    {
        $this->transportKeyId = $transportKeyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPublicKey() : string
    {
        return $this->publicKey;
    }
    /**
     * 
     *
     * @param string $publicKey
     *
     * @return self
     */
    public function setPublicKey(string $publicKey) : self
    {
        $this->publicKey = $publicKey;
        return $this;
    }
}