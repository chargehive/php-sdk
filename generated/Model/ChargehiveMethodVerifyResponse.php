<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodVerifyResponse implements \JsonSerializable
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
     * @return bool
     */
    public function getVerified()
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
    public function setVerified(bool $verified)
    {
        $this->verified = $verified;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAuthed()
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
    public function setAuthed(bool $authed)
    {
        $this->authed = $authed;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypePaymentMethodInfo
     */
    public function getInfo()
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
    public function setInfo(ChtypePaymentMethodInfo $info)
    {
        $this->info = $info;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeTransaction
     */
    public function getTransaction()
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
    public function setTransaction(ChtypeTransaction $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['verified' => $this->verified, 'authed' => $this->authed, 'info' => $this->info, 'transaction' => $this->transaction];
    }
}