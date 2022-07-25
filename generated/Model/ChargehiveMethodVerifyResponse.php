<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodVerifyResponse
{
    /**
     * 
     *
     * @var bool
     */
    protected $verified;
    /**
     * 
     *
     * @var bool
     */
    protected $authed;
    /**
     * 
     *
     * @var ChtypePaymentMethodInfo
     */
    protected $info;
    /**
     * 
     *
     * @var ChtypeTransaction
     */
    protected $transaction;
    /**
     * 
     *
     * @var ChargehivePCIBTokenizeResponse
     */
    protected $tokenizeResponse;
    /**
     * 
     *
     * @return bool
     */
    public function getVerified() : bool
    {
        return $this->verified;
    }
    /**
     * 
     *
     * @param bool $verified
     *
     * @return self
     */
    public function setVerified(bool $verified) : self
    {
        $this->verified = $verified;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAuthed() : bool
    {
        return $this->authed;
    }
    /**
     * 
     *
     * @param bool $authed
     *
     * @return self
     */
    public function setAuthed(bool $authed) : self
    {
        $this->authed = $authed;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypePaymentMethodInfo
     */
    public function getInfo() : ChtypePaymentMethodInfo
    {
        return $this->info;
    }
    /**
     * 
     *
     * @param ChtypePaymentMethodInfo $info
     *
     * @return self
     */
    public function setInfo(ChtypePaymentMethodInfo $info) : self
    {
        $this->info = $info;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeTransaction
     */
    public function getTransaction() : ChtypeTransaction
    {
        return $this->transaction;
    }
    /**
     * 
     *
     * @param ChtypeTransaction $transaction
     *
     * @return self
     */
    public function setTransaction(ChtypeTransaction $transaction) : self
    {
        $this->transaction = $transaction;
        return $this;
    }
    /**
     * 
     *
     * @return ChargehivePCIBTokenizeResponse
     */
    public function getTokenizeResponse() : ChargehivePCIBTokenizeResponse
    {
        return $this->tokenizeResponse;
    }
    /**
     * 
     *
     * @param ChargehivePCIBTokenizeResponse $tokenizeResponse
     *
     * @return self
     */
    public function setTokenizeResponse(ChargehivePCIBTokenizeResponse $tokenizeResponse) : self
    {
        $this->tokenizeResponse = $tokenizeResponse;
        return $this;
    }
}