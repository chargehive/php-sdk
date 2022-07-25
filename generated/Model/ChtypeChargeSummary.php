<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeChargeSummary
{
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
    protected $status = 'STATUS_INVALID';
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
}