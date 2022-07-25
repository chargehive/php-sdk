<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeAuthorizeResponse
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
}