<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeFraudFactor implements \JsonSerializable
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
    public function getOn()
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
    public function setOn(string $on)
    {
        $this->on = $on;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFactor()
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
    public function setFactor(string $factor)
    {
        $this->factor = $factor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOtherOn()
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
    public function setOtherOn(string $otherOn)
    {
        $this->otherOn = $otherOn;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOtherFactor()
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
    public function setOtherFactor(string $otherFactor)
    {
        $this->otherFactor = $otherFactor;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['on' => $this->on, 'factor' => $this->factor, 'otherOn' => $this->otherOn, 'otherFactor' => $this->otherFactor];
    }
}