<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeRefundTransaction implements \JsonSerializable
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
    public function getSourceTransactionId()
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
    public function setSourceTransactionId(string $sourceTransactionId)
    {
        $this->sourceTransactionId = $sourceTransactionId;
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
     * @return string
     */
    public function getPaymentMethodToken()
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
    public function setPaymentMethodToken(string $paymentMethodToken)
    {
        $this->paymentMethodToken = $paymentMethodToken;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['sourceTransactionId' => $this->sourceTransactionId, 'amount' => $this->amount, 'paymentMethodToken' => $this->paymentMethodToken];
    }
}