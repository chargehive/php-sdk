<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeAttemptDetail implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $chargeTransactionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $chargeAttemptNumber;
    /**
     * 
     *
     * @var string
     */
    protected $attemptTransactionNumber;
    /**
     * 
     *
     * @var string
     */
    protected $attemptMethodCascade;
    /**
     * 
     *
     * @var string
     */
    protected $attemptConnectorCascade;
    /**
     * 
     *
     * @var bool
     */
    protected $isPrimaryMethod;
    /**
     * 
     *
     * @return string
     */
    public function getChargeTransactionNumber()
    {
        return $this->chargeTransactionNumber;
    }
    /**
     * 
     *
     * @param string $chargeTransactionNumber
     *
     * @return self
     */
    public function setChargeTransactionNumber(string $chargeTransactionNumber)
    {
        $this->chargeTransactionNumber = $chargeTransactionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getChargeAttemptNumber()
    {
        return $this->chargeAttemptNumber;
    }
    /**
     * 
     *
     * @param string $chargeAttemptNumber
     *
     * @return self
     */
    public function setChargeAttemptNumber(string $chargeAttemptNumber)
    {
        $this->chargeAttemptNumber = $chargeAttemptNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttemptTransactionNumber()
    {
        return $this->attemptTransactionNumber;
    }
    /**
     * 
     *
     * @param string $attemptTransactionNumber
     *
     * @return self
     */
    public function setAttemptTransactionNumber(string $attemptTransactionNumber)
    {
        $this->attemptTransactionNumber = $attemptTransactionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttemptMethodCascade()
    {
        return $this->attemptMethodCascade;
    }
    /**
     * 
     *
     * @param string $attemptMethodCascade
     *
     * @return self
     */
    public function setAttemptMethodCascade(string $attemptMethodCascade)
    {
        $this->attemptMethodCascade = $attemptMethodCascade;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttemptConnectorCascade()
    {
        return $this->attemptConnectorCascade;
    }
    /**
     * 
     *
     * @param string $attemptConnectorCascade
     *
     * @return self
     */
    public function setAttemptConnectorCascade(string $attemptConnectorCascade)
    {
        $this->attemptConnectorCascade = $attemptConnectorCascade;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPrimaryMethod()
    {
        return $this->isPrimaryMethod;
    }
    /**
     * 
     *
     * @param bool $isPrimaryMethod
     *
     * @return self
     */
    public function setIsPrimaryMethod(bool $isPrimaryMethod)
    {
        $this->isPrimaryMethod = $isPrimaryMethod;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['chargeTransactionNumber' => $this->chargeTransactionNumber, 'chargeAttemptNumber' => $this->chargeAttemptNumber, 'attemptTransactionNumber' => $this->attemptTransactionNumber, 'attemptMethodCascade' => $this->attemptMethodCascade, 'attemptConnectorCascade' => $this->attemptConnectorCascade, 'isPrimaryMethod' => $this->isPrimaryMethod];
    }
}