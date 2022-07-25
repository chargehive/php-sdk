<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeModifyRequest
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
     * @return string
     */
    public function getChargeId() : string
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
    public function setChargeId(string $chargeId) : self
    {
        $this->chargeId = $chargeId;
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
     * @return string
     */
    public function getChargeMetaType() : string
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
    public function setChargeMetaType(string $chargeMetaType) : self
    {
        $this->chargeMetaType = $chargeMetaType;
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