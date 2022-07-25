<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeFraudScanResponse
{
    /**
     * 
     *
     * @var ChtypeFraudResult[]
     */
    protected $results;
    /**
     * 
     *
     * @return ChtypeFraudResult[]
     */
    public function getResults() : array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param ChtypeFraudResult[] $results
     *
     * @return self
     */
    public function setResults(array $results) : self
    {
        $this->results = $results;
        return $this;
    }
}