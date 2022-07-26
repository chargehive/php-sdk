<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCaptureRequest implements \JsonSerializable
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
     * @var string
     */
    protected $initialTransactionId;
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
     * @return string
     */
    public function getInitialTransactionId()
    {
        return $this->initialTransactionId;
    }
    /**
     * 
     *
     * @param string $initialTransactionId
     *
     * @return self
     */
    public function setInitialTransactionId(string $initialTransactionId)
    {
        $this->initialTransactionId = $initialTransactionId;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['chargeId' => $this->chargeId, 'amount' => $this->amount, 'initialTransactionId' => $this->initialTransactionId];
    }
}