<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeRefundRequest
{
    /**
     * 
     *
     * @var string
     */
    protected $chargeId;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $amount;
    /**
     * 
     *
     * @var ChtypeReason
     */
    protected $reason;
    /**
     * 
     *
     * @var ChargehiveChargeRefundTransaction[]
     */
    protected $transactions;
    /**
     * 
     *
     * @return string
     */
    public function getChargeId() : string
    {
        return $this->chargeId;
    }
    /**
     * 
     *
     * @param string $chargeId
     *
     * @return self
     */
    public function setChargeId(string $chargeId) : self
    {
        $this->chargeId = $chargeId;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getAmount() : ChtypeAmount
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $amount
     *
     * @return self
     */
    public function setAmount(ChtypeAmount $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeReason
     */
    public function getReason() : ChtypeReason
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param ChtypeReason $reason
     *
     * @return self
     */
    public function setReason(ChtypeReason $reason) : self
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * 
     *
     * @return ChargehiveChargeRefundTransaction[]
     */
    public function getTransactions() : array
    {
        return $this->transactions;
    }
    /**
     * 
     *
     * @param ChargehiveChargeRefundTransaction[] $transactions
     *
     * @return self
     */
    public function setTransactions(array $transactions) : self
    {
        $this->transactions = $transactions;
        return $this;
    }
}