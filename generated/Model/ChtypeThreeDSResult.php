<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeThreeDSResult
{
    /**
     * 
     *
     * @var string
     */
    protected $eci;
    /**
     * 
     *
     * @var string
     */
    protected $cavv;
    /**
     * 
     *
     * @var string
     */
    protected $xid;
    /**
     * 
     *
     * @var string
     */
    protected $enrollment;
    /**
     * 
     *
     * @var string
     */
    protected $result;
    /**
     * 
     *
     * @var string
     */
    protected $signatureStatus;
    /**
     * 
     *
     * @var string
     */
    protected $serverTransactionId;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $majorVersion;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @var string
     */
    protected $paReq;
    /**
     * 
     *
     * @var string
     */
    protected $acsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $paRes;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string
     */
    protected $liability = 'LIABILITY_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $sdkResponse;
    /**
     * 
     *
     * @return string
     */
    public function getEci() : string
    {
        return $this->eci;
    }
    /**
     * 
     *
     * @param string $eci
     *
     * @return self
     */
    public function setEci(string $eci) : self
    {
        $this->eci = $eci;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCavv() : string
    {
        return $this->cavv;
    }
    /**
     * 
     *
     * @param string $cavv
     *
     * @return self
     */
    public function setCavv(string $cavv) : self
    {
        $this->cavv = $cavv;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getXid() : string
    {
        return $this->xid;
    }
    /**
     * 
     *
     * @param string $xid
     *
     * @return self
     */
    public function setXid(string $xid) : self
    {
        $this->xid = $xid;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnrollment() : string
    {
        return $this->enrollment;
    }
    /**
     * 
     *
     * @param string $enrollment
     *
     * @return self
     */
    public function setEnrollment(string $enrollment) : self
    {
        $this->enrollment = $enrollment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResult() : string
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param string $result
     *
     * @return self
     */
    public function setResult(string $result) : self
    {
        $this->result = $result;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSignatureStatus() : string
    {
        return $this->signatureStatus;
    }
    /**
     * 
     *
     * @param string $signatureStatus
     *
     * @return self
     */
    public function setSignatureStatus(string $signatureStatus) : self
    {
        $this->signatureStatus = $signatureStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getServerTransactionId() : string
    {
        return $this->serverTransactionId;
    }
    /**
     * 
     *
     * @param string $serverTransactionId
     *
     * @return self
     */
    public function setServerTransactionId(string $serverTransactionId) : self
    {
        $this->serverTransactionId = $serverTransactionId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
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
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMajorVersion() : int
    {
        return $this->majorVersion;
    }
    /**
     * 
     *
     * @param int $majorVersion
     *
     * @return self
     */
    public function setMajorVersion(int $majorVersion) : self
    {
        $this->majorVersion = $majorVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaReq() : string
    {
        return $this->paReq;
    }
    /**
     * 
     *
     * @param string $paReq
     *
     * @return self
     */
    public function setPaReq(string $paReq) : self
    {
        $this->paReq = $paReq;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAcsUrl() : string
    {
        return $this->acsUrl;
    }
    /**
     * 
     *
     * @param string $acsUrl
     *
     * @return self
     */
    public function setAcsUrl(string $acsUrl) : self
    {
        $this->acsUrl = $acsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaRes() : string
    {
        return $this->paRes;
    }
    /**
     * 
     *
     * @param string $paRes
     *
     * @return self
     */
    public function setPaRes(string $paRes) : self
    {
        $this->paRes = $paRes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLiability() : string
    {
        return $this->liability;
    }
    /**
     * 
     *
     * @param string $liability
     *
     * @return self
     */
    public function setLiability(string $liability) : self
    {
        $this->liability = $liability;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSdkResponse() : string
    {
        return $this->sdkResponse;
    }
    /**
     * 
     *
     * @param string $sdkResponse
     *
     * @return self
     */
    public function setSdkResponse(string $sdkResponse) : self
    {
        $this->sdkResponse = $sdkResponse;
        return $this;
    }
}