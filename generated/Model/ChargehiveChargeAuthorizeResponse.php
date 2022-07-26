<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeAuthorizeResponse implements \JsonSerializable
{
    /**
     * 
     *
     * @var ChtypeTransaction
     */
    protected $transaction;
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
        return ['transaction' => $this->transaction];
    }
}