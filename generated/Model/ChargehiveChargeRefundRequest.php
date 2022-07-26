<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeRefundRequest implements \JsonSerializable
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
    public function getChargeId()
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
    public function setChargeId(string $chargeId)
    {
        $this->chargeId = $chargeId;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getAmount()
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
    public function setAmount(ChtypeAmount $amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeReason
     */
    public function getReason()
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
    public function setReason(ChtypeReason $reason)
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * 
     *
     * @return ChargehiveChargeRefundTransaction[]
     */
    public function getTransactions()
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
    public function setTransactions(array $transactions)
    {
        $this->transactions = $transactions;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['chargeId' => $this->chargeId, 'amount' => $this->amount, 'reason' => $this->reason, 'transactions' => $this->transactions];
    }
}