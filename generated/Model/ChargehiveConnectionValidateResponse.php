<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConnectionValidateResponse implements \JsonSerializable
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
     * @var ChtypeResponseDetail
     */
    protected $response;
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
    /**
     * 
     *
     * @return ChtypeResponseDetail
     */
    public function getResponse()
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param ChtypeResponseDetail $response
     *
     * @return self
     */
    public function setResponse(ChtypeResponseDetail $response)
    {
        $this->response = $response;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['requestId' => $this->requestId, 'verificationKey' => $this->verificationKey, 'response' => $this->response];
    }
}