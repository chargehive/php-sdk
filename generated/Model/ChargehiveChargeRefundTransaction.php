<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeRefundTransaction
{
    /**
     * 
     *
     * @var string
     */
    protected $sourceTransactionId;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $amount;
    /**
     * 
     *
     * @var string
     */
    protected $paymentMethodToken;
    /**
     * 
     *
     * @return string
     */
    public function getSourceTransactionId() : string
    {
        return $this->sourceTransactionId;
    }
    /**
     * 
     *
     * @param string $sourceTransactionId
     *
     * @return self
     */
    public function setSourceTransactionId(string $sourceTransactionId) : self
    {
        $this->sourceTransactionId = $sourceTransactionId;
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
     * @return string
     */
    public function getPaymentMethodToken() : string
    {
        return $this->paymentMethodToken;
    }
    /**
     * 
     *
     * @param string $paymentMethodToken
     *
     * @return self
     */
    public function setPaymentMethodToken(string $paymentMethodToken) : self
    {
        $this->paymentMethodToken = $paymentMethodToken;
        return $this;
    }
}