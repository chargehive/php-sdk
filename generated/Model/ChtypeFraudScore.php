<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeFraudScore
{
    /**
     * 
     *
     * @var float
     */
    protected $score;
    /**
     * 
     *
     * @var string
     */
    protected $riskLevel = 'RISK_LEVEL_INVALID';
    /**
     * 
     *
     * @var ChtypeFraudFactor
     */
    protected $factor;
    /**
     * 
     *
     * @var string
     */
    protected $summary;
    /**
     * 
     *
     * @var string[]
     */
    protected $data;
    /**
     * 
     *
     * @return float
     */
    public function getScore() : float
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param float $score
     *
     * @return self
     */
    public function setScore(float $score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRiskLevel() : string
    {
        return $this->riskLevel;
    }
    /**
     * 
     *
     * @param string $riskLevel
     *
     * @return self
     */
    public function setRiskLevel(string $riskLevel) : self
    {
        $this->riskLevel = $riskLevel;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeFraudFactor
     */
    public function getFactor() : ChtypeFraudFactor
    {
        return $this->factor;
    }
    /**
     * 
     *
     * @param ChtypeFraudFactor $factor
     *
     * @return self
     */
    public function setFactor(ChtypeFraudFactor $factor) : self
    {
        $this->factor = $factor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary;
    }
    /**
     * 
     *
     * @param string $summary
     *
     * @return self
     */
    public function setSummary(string $summary) : self
    {
        $this->summary = $summary;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getData() : \ArrayObject
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string[] $data
     *
     * @return self
     */
    public function setData(\ArrayObject $data) : self
    {
        $this->data = $data;
        return $this;
    }
}