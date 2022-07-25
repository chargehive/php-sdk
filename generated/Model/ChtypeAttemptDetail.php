<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeAttemptDetail
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
    public function getChargeTransactionNumber() : string
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
    public function setChargeTransactionNumber(string $chargeTransactionNumber) : self
    {
        $this->chargeTransactionNumber = $chargeTransactionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getChargeAttemptNumber() : string
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
    public function setChargeAttemptNumber(string $chargeAttemptNumber) : self
    {
        $this->chargeAttemptNumber = $chargeAttemptNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttemptTransactionNumber() : string
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
    public function setAttemptTransactionNumber(string $attemptTransactionNumber) : self
    {
        $this->attemptTransactionNumber = $attemptTransactionNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttemptMethodCascade() : string
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
    public function setAttemptMethodCascade(string $attemptMethodCascade) : self
    {
        $this->attemptMethodCascade = $attemptMethodCascade;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttemptConnectorCascade() : string
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
    public function setAttemptConnectorCascade(string $attemptConnectorCascade) : self
    {
        $this->attemptConnectorCascade = $attemptConnectorCascade;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPrimaryMethod() : bool
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
    public function setIsPrimaryMethod(bool $isPrimaryMethod) : self
    {
        $this->isPrimaryMethod = $isPrimaryMethod;
        return $this;
    }
}