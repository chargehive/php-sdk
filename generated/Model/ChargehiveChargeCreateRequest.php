<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCreateRequest
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
     * @return string
     */
    public function getMerchantReference() : string
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
    public function setMerchantReference(string $merchantReference) : self
    {
        $this->merchantReference = $merchantReference;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getAmount() : ChtypeAmount
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
    public function setAmount(ChtypeAmount $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPaymentMethodIds() : array
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
    public function setPaymentMethodIds(array $paymentMethodIds) : self
    {
        $this->paymentMethodIds = $paymentMethodIds;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpiryTime() : \DateTime
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
    public function setExpiryTime(\DateTime $expiryTime) : self
    {
        $this->expiryTime = $expiryTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContractType() : string
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
    public function setContractType(string $contractType) : self
    {
        $this->contractType = $contractType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnvironment() : string
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
    public function setEnvironment(string $environment) : self
    {
        $this->environment = $environment;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeChargeMeta
     */
    public function getChargeMeta() : ChtypeChargeMeta
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
    public function setChargeMeta(ChtypeChargeMeta $chargeMeta) : self
    {
        $this->chargeMeta = $chargeMeta;
        return $this;
    }
    /**
     * 
     *
     * @return ChargehivechtypeLabel[]
     */
    public function getLabels() : array
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
    public function setLabels(array $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
}