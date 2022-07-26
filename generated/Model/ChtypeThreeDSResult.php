<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeThreeDSResult implements \JsonSerializable
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
    public function getEci()
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
    public function setEci(string $eci)
    {
        $this->eci = $eci;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCavv()
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
    public function setCavv(string $cavv)
    {
        $this->cavv = $cavv;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getXid()
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
    public function setXid(string $xid)
    {
        $this->xid = $xid;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnrollment()
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
    public function setEnrollment(string $enrollment)
    {
        $this->enrollment = $enrollment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResult()
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
    public function setResult(string $result)
    {
        $this->result = $result;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSignatureStatus()
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
    public function setSignatureStatus(string $signatureStatus)
    {
        $this->signatureStatus = $signatureStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getServerTransactionId()
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
    public function setServerTransactionId(string $serverTransactionId)
    {
        $this->serverTransactionId = $serverTransactionId;
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
    /**
     * 
     *
     * @return int
     */
    public function getMajorVersion()
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
    public function setMajorVersion(int $majorVersion)
    {
        $this->majorVersion = $majorVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion()
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
    public function setVersion(string $version)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaReq()
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
    public function setPaReq(string $paReq)
    {
        $this->paReq = $paReq;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAcsUrl()
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
    public function setAcsUrl(string $acsUrl)
    {
        $this->acsUrl = $acsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaRes()
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
    public function setPaRes(string $paRes)
    {
        $this->paRes = $paRes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId()
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
    public function setId(string $id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp()
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
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLiability()
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
    public function setLiability(string $liability)
    {
        $this->liability = $liability;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSdkResponse()
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
    public function setSdkResponse(string $sdkResponse)
    {
        $this->sdkResponse = $sdkResponse;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['eci' => $this->eci, 'cavv' => $this->cavv, 'xid' => $this->xid, 'enrollment' => $this->enrollment, 'result' => $this->result, 'signatureStatus' => $this->signatureStatus, 'serverTransactionId' => $this->serverTransactionId, 'status' => $this->status, 'majorVersion' => $this->majorVersion, 'version' => $this->version, 'paReq' => $this->paReq, 'acsUrl' => $this->acsUrl, 'paRes' => $this->paRes, 'id' => $this->id, 'timestamp' => $this->timestamp, 'liability' => $this->liability, 'sdkResponse' => $this->sdkResponse];
    }
}