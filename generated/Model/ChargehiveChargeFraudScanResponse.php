<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeFraudScanResponse implements \JsonSerializable
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
    public function getResults()
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
    public function setResults(array $results)
    {
        $this->results = $results;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['results' => $this->results];
    }
}