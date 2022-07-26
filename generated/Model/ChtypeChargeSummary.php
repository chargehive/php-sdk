<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeChargeSummary implements \JsonSerializable
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
    public function jsonSerialize()
    {
        return ['amount' => $this->amount, 'status' => $this->status];
    }
}