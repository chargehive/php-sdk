<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeSummaryRetrieveResponse implements \JsonSerializable
{
    /**
     * 
     *
     * @var ChtypeChargeSummary
     */
    protected $chargeSummary;
    /**
     * 
     *
     * @return ChtypeChargeSummary
     */
    public function getChargeSummary()
    {
        return $this->chargeSummary;
    }
    /**
     * 
     *
     * @param ChtypeChargeSummary $chargeSummary
     *
     * @return self
     */
    public function setChargeSummary(ChtypeChargeSummary $chargeSummary)
    {
        $this->chargeSummary = $chargeSummary;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['chargeSummary' => $this->chargeSummary];
    }
}