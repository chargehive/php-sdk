<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeAmount
{
    /**
     * 
     *
     * @var string
     */
    protected $units;
    /**
     * 
     *
     * @var string
     */
    protected $currency;
    /**
     * 
     *
     * @return string
     */
    public function getUnits() : string
    {
        return $this->units;
    }
    /**
     * 
     *
     * @param string $units
     *
     * @return self
     */
    public function setUnits(string $units) : self
    {
        $this->units = $units;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
}