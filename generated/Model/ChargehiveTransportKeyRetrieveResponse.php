<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveTransportKeyRetrieveResponse implements \JsonSerializable
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
    public function getSuccess()
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
    public function setSuccess(bool $success)
    {
        $this->success = $success;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransportKeyId()
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
    public function setTransportKeyId(string $transportKeyId)
    {
        $this->transportKeyId = $transportKeyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPublicKey()
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
    public function setPublicKey(string $publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['success' => $this->success, 'transportKeyId' => $this->transportKeyId, 'publicKey' => $this->publicKey];
    }
}