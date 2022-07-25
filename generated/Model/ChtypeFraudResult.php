<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeFraudResult
{
    /**
     * 
     *
     * @var string
     */
    protected $fraudCheckId;
    /**
     * 
     *
     * @var ChtypeFraudScore
     */
    protected $overallScore;
    /**
     * 
     *
     * @var ChtypeFraudScore[]
     */
    protected $subScores;
    /**
     * 
     *
     * @var string
     */
    protected $suggestedAction = 'SUGGESTED_ACTION_INVALID';
    /**
     * 
     *
     * @var \DateTime
     */
    protected $scanTime;
    /**
     * 
     *
     * @var string
     */
    protected $connectorLibrary;
    /**
     * 
     *
     * @var string[]
     */
    protected $additionalData;
    /**
     * 
     *
     * @var string[]
     */
    protected $infoLinks;
    /**
     * 
     *
     * @return string
     */
    public function getFraudCheckId() : string
    {
        return $this->fraudCheckId;
    }
    /**
     * 
     *
     * @param string $fraudCheckId
     *
     * @return self
     */
    public function setFraudCheckId(string $fraudCheckId) : self
    {
        $this->fraudCheckId = $fraudCheckId;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeFraudScore
     */
    public function getOverallScore() : ChtypeFraudScore
    {
        return $this->overallScore;
    }
    /**
     * 
     *
     * @param ChtypeFraudScore $overallScore
     *
     * @return self
     */
    public function setOverallScore(ChtypeFraudScore $overallScore) : self
    {
        $this->overallScore = $overallScore;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeFraudScore[]
     */
    public function getSubScores() : array
    {
        return $this->subScores;
    }
    /**
     * 
     *
     * @param ChtypeFraudScore[] $subScores
     *
     * @return self
     */
    public function setSubScores(array $subScores) : self
    {
        $this->subScores = $subScores;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSuggestedAction() : string
    {
        return $this->suggestedAction;
    }
    /**
     * 
     *
     * @param string $suggestedAction
     *
     * @return self
     */
    public function setSuggestedAction(string $suggestedAction) : self
    {
        $this->suggestedAction = $suggestedAction;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getScanTime() : \DateTime
    {
        return $this->scanTime;
    }
    /**
     * 
     *
     * @param \DateTime $scanTime
     *
     * @return self
     */
    public function setScanTime(\DateTime $scanTime) : self
    {
        $this->scanTime = $scanTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConnectorLibrary() : string
    {
        return $this->connectorLibrary;
    }
    /**
     * 
     *
     * @param string $connectorLibrary
     *
     * @return self
     */
    public function setConnectorLibrary(string $connectorLibrary) : self
    {
        $this->connectorLibrary = $connectorLibrary;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAdditionalData() : \ArrayObject
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param string[] $additionalData
     *
     * @return self
     */
    public function setAdditionalData(\ArrayObject $additionalData) : self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getInfoLinks() : \ArrayObject
    {
        return $this->infoLinks;
    }
    /**
     * 
     *
     * @param string[] $infoLinks
     *
     * @return self
     */
    public function setInfoLinks(\ArrayObject $infoLinks) : self
    {
        $this->infoLinks = $infoLinks;
        return $this;
    }
}