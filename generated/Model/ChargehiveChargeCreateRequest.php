<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCreateRequest implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $merchantReference;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $amount;
    /**
     * 
     *
     * @var string[]
     */
    protected $paymentMethodIds;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expiryTime;
    /**
     * 
     *
     * @var string
     */
    protected $contractType = 'CONTRACT_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $environment = 'CHARGE_ENVIRONMENT_INVALID';
    /**
     * 
     *
     * @var ChtypeChargeMeta
     */
    protected $chargeMeta;
    /**
     * 
     *
     * @var ChargehivechtypeLabel[]
     */
    protected $labels;
    /**
     * 
     *
     * @var ChtypeInitialTransactionData[]
     */
    protected $initialTransactions;
    /**
     * 
     *
     * @var string
     */
    protected $billingProfileId;
    /**
     * 
     *
     * @var string
     */
    protected $chargeTimezone;
    /**
     * 
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }
    /**
     * 
     *
     * @param string $merchantReference
     *
     * @return self
     */
    public function setMerchantReference(string $merchantReference)
    {
        $this->merchantReference = $merchantReference;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $amount
     *
     * @return self
     */
    public function setAmount(ChtypeAmount $amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPaymentMethodIds()
    {
        return $this->paymentMethodIds;
    }
    /**
     * 
     *
     * @param string[] $paymentMethodIds
     *
     * @return self
     */
    public function setPaymentMethodIds(array $paymentMethodIds)
    {
        $this->paymentMethodIds = $paymentMethodIds;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }
    /**
     * 
     *
     * @param \DateTime $expiryTime
     *
     * @return self
     */
    public function setExpiryTime(\DateTime $expiryTime)
    {
        $this->expiryTime = $expiryTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContractType()
    {
        return $this->contractType;
    }
    /**
     * 
     *
     * @param string $contractType
     *
     * @return self
     */
    public function setContractType(string $contractType)
    {
        $this->contractType = $contractType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }
    /**
     * 
     *
     * @param string $environment
     *
     * @return self
     */
    public function setEnvironment(string $environment)
    {
        $this->environment = $environment;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeChargeMeta
     */
    public function getChargeMeta()
    {
        return $this->chargeMeta;
    }
    /**
     * 
     *
     * @param ChtypeChargeMeta $chargeMeta
     *
     * @return self
     */
    public function setChargeMeta(ChtypeChargeMeta $chargeMeta)
    {
        $this->chargeMeta = $chargeMeta;
        return $this;
    }
    /**
     * 
     *
     * @return ChargehivechtypeLabel[]
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param ChargehivechtypeLabel[] $labels
     *
     * @return self
     */
    public function setLabels(array $labels)
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeInitialTransactionData[]
     */
    public function getInitialTransactions()
    {
        return $this->initialTransactions;
    }
    /**
     * 
     *
     * @param ChtypeInitialTransactionData[] $initialTransactions
     *
     * @return self
     */
    public function setInitialTransactions(array $initialTransactions)
    {
        $this->initialTransactions = $initialTransactions;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBillingProfileId()
    {
        return $this->billingProfileId;
    }
    /**
     * 
     *
     * @param string $billingProfileId
     *
     * @return self
     */
    public function setBillingProfileId(string $billingProfileId)
    {
        $this->billingProfileId = $billingProfileId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getChargeTimezone()
    {
        return $this->chargeTimezone;
    }
    /**
     * 
     *
     * @param string $chargeTimezone
     *
     * @return self
     */
    public function setChargeTimezone(string $chargeTimezone)
    {
        $this->chargeTimezone = $chargeTimezone;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['merchantReference' => $this->merchantReference, 'amount' => $this->amount, 'paymentMethodIds' => $this->paymentMethodIds, 'expiryTime' => $this->expiryTime, 'contractType' => $this->contractType, 'environment' => $this->environment, 'chargeMeta' => $this->chargeMeta, 'labels' => $this->labels, 'initialTransactions' => $this->initialTransactions, 'billingProfileId' => $this->billingProfileId, 'chargeTimezone' => $this->chargeTimezone];
    }
}