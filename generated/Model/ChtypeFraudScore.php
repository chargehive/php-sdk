<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeFraudScore implements \JsonSerializable
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
    public function getScore()
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
    public function setScore(float $score)
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRiskLevel()
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
    public function setRiskLevel(string $riskLevel)
    {
        $this->riskLevel = $riskLevel;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeFraudFactor
     */
    public function getFactor()
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
    public function setFactor(ChtypeFraudFactor $factor)
    {
        $this->factor = $factor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSummary()
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
    public function setSummary(string $summary)
    {
        $this->summary = $summary;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getData()
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
    public function setData(\ArrayObject $data)
    {
        $this->data = $data;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['score' => $this->score, 'riskLevel' => $this->riskLevel, 'factor' => $this->factor, 'summary' => $this->summary, 'data' => $this->data];
    }
}