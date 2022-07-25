<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConnectionValidateResponse
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
    public function getRequestId() : string
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
    public function setRequestId(string $requestId) : self
    {
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVerificationKey() : string
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
    public function setVerificationKey(string $verificationKey) : self
    {
        $this->verificationKey = $verificationKey;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeResponseDetail
     */
    public function getResponse() : ChtypeResponseDetail
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
    public function setResponse(ChtypeResponseDetail $response) : self
    {
        $this->response = $response;
        return $this;
    }
}