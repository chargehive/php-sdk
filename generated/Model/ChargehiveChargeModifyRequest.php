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
    public function jsonSerialize()
    {
        return ['chargeId' => $this->chargeId, 'amount' => $this->amount, 'paymentMethodIds' => $this->paymentMethodIds, 'expiryTime' => $this->expiryTime, 'chargeMeta' => $this->chargeMeta, 'chargeMetaType' => $this->chargeMetaType, 'labels' => $this->labels];
    }
}