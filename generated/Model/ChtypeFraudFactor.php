<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeFraudFactor
{
    /**
     * 
     *
     * @var string
     */
    protected $on = 'FRAUD_FACTOR_ON_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $factor = 'FRAUD_FACTOR_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $otherOn;
    /**
     * 
     *
     * @var string
     */
    protected $otherFactor;
    /**
     * 
     *
     * @return string
     */
    public function getOn() : string
    {
        return $this->on;
    }
    /**
     * 
     *
     * @param string $on
     *
     * @return self
     */
    public function setOn(string $on) : self
    {
        $this->on = $on;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFactor() : string
    {
        return $this->factor;
    }
    /**
     * 
     *
     * @param string $factor
     *
     * @return self
     */
    public function setFactor(string $factor) : self
    {
        $this->factor = $factor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOtherOn() : string
    {
        return $this->otherOn;
    }
    /**
     * 
     *
     * @param string $otherOn
     *
     * @return self
     */
    public function setOtherOn(string $otherOn) : self
    {
        $this->otherOn = $otherOn;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOtherFactor() : string
    {
        return $this->otherFactor;
    }
    /**
     * 
     *
     * @param string $otherFactor
     *
     * @return self
     */
    public function setOtherFactor(string $otherFactor) : self
    {
        $this->otherFactor = $otherFactor;
        return $this;
    }
}