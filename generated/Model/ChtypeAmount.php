<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeAmount implements \JsonSerializable
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
    public function getUnits()
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
    public function setUnits(string $units)
    {
        $this->units = $units;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrency()
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
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['units' => $this->units, 'currency' => $this->currency];
    }
}