<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeFraudResult implements \JsonSerializable
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
    public function getFraudCheckId()
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
    public function setFraudCheckId(string $fraudCheckId)
    {
        $this->fraudCheckId = $fraudCheckId;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeFraudScore
     */
    public function getOverallScore()
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
    public function setOverallScore(ChtypeFraudScore $overallScore)
    {
        $this->overallScore = $overallScore;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeFraudScore[]
     */
    public function getSubScores()
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
    public function setSubScores(array $subScores)
    {
        $this->subScores = $subScores;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSuggestedAction()
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
    public function setSuggestedAction(string $suggestedAction)
    {
        $this->suggestedAction = $suggestedAction;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getScanTime()
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
    public function setScanTime(\DateTime $scanTime)
    {
        $this->scanTime = $scanTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConnectorLibrary()
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
    public function setConnectorLibrary(string $connectorLibrary)
    {
        $this->connectorLibrary = $connectorLibrary;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAdditionalData()
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
    public function setAdditionalData(\ArrayObject $additionalData)
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getInfoLinks()
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
    public function setInfoLinks(\ArrayObject $infoLinks)
    {
        $this->infoLinks = $infoLinks;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['fraudCheckId' => $this->fraudCheckId, 'overallScore' => $this->overallScore, 'subScores' => $this->subScores, 'suggestedAction' => $this->suggestedAction, 'scanTime' => $this->scanTime, 'connectorLibrary' => $this->connectorLibrary, 'additionalData' => $this->additionalData, 'infoLinks' => $this->infoLinks];
    }
}