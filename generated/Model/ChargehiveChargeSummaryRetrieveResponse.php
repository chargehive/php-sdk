<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeSummaryRetrieveResponse
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
    public function getChargeSummary() : ChtypeChargeSummary
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
    public function setChargeSummary(ChtypeChargeSummary $chargeSummary) : self
    {
        $this->chargeSummary = $chargeSummary;
        return $this;
    }
}