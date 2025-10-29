<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeModifyRequest implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $chargeId;
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
     * @var ChtypeChargeMeta
     */
    protected $chargeMeta;
    /**
     * 
     *
     * @var string
     */
    protected $chargeMetaType = 'CHARGE_META_TYPE_INVALID';
    /**
     * 
     *
     * @var ChargehivechtypeLabel[]
     */
    protected $labels;
    /**
     * 
     *
     * @var string
     */
    protected $billingProfileId;
    /**
     * 
     *
     * @var ChtypeInitialTransactionData[]
     */
    protected $initialTransaction;
    /**
     * 
     *
     * @var bool
     */
    protected $reactivate;
    /**
     * 
     *
     * @var string
     */
    protected $chargeTimezone;
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
     * @return string
     */
    public function getChargeId()
    {
        return $this->chargeId;
    }
    /**
     * 
     *
     * @param string $chargeId
     *
     * @return self
     */
    public function setChargeId(string $chargeId)
    {
        $this->chargeId = $chargeId;
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
     * @return string
     */
    public function getChargeMetaType()
    {
        return $this->chargeMetaType;
    }
    /**
     * 
     *
     * @param string $chargeMetaType
     *
     * @return self
     */
    public function setChargeMetaType(string $chargeMetaType)
    {
        $this->chargeMetaType = $chargeMetaType;
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
     * @return ChtypeInitialTransactionData[]
     */
    public function getInitialTransaction()
    {
        return $this->initialTransaction;
    }
    /**
     * 
     *
     * @param ChtypeInitialTransactionData[] $initialTransaction
     *
     * @return self
     */
    public function setInitialTransaction(array $initialTransaction)
    {
        $this->initialTransaction = $initialTransaction;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getReactivate()
    {
        return $this->reactivate;
    }
    /**
     * 
     *
     * @param bool $reactivate
     *
     * @return self
     */
    public function setReactivate(bool $reactivate)
    {
        $this->reactivate = $reactivate;
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
    public function jsonSerialize()
    {
        return ['chargeId' => $this->chargeId, 'amount' => $this->amount, 'paymentMethodIds' => $this->paymentMethodIds, 'expiryTime' => $this->expiryTime, 'chargeMeta' => $this->chargeMeta, 'chargeMetaType' => $this->chargeMetaType, 'labels' => $this->labels, 'billingProfileId' => $this->billingProfileId, 'initialTransaction' => $this->initialTransaction, 'reactivate' => $this->reactivate, 'chargeTimezone' => $this->chargeTimezone, 'contractType' => $this->contractType, 'environment' => $this->environment];
    }
}