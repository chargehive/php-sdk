<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeRetrieveResponse implements \JsonSerializable
{
    /**
     * 
     *
     * @var ChtypeCharge
     */
    protected $charge;
    /**
     * 
     *
     * @var ChtypeChargeMeta
     */
    protected $meta;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdTime;
    /**
     * 
     *
     * @var string
     */
    protected $chargeId;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $initiatedTime;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $lastAttemptTime;
    /**
     * 
     *
     * @var string
     */
    protected $status = 'STATUS_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $totalAuthed;
    /**
     * 
     *
     * @var string
     */
    protected $totalCaptured;
    /**
     * 
     *
     * @var string
     */
    protected $totalRefunded;
    /**
     * 
     *
     * @var string
     */
    protected $merchantSubscriptionId;
    /**
     * 
     *
     * @var string
     */
    protected $country = 'COUNTRY_CODE_INVALID';
    /**
     * 
     *
     * @var ChargehivechtypeLabel[]
     */
    protected $labels;
    /**
     * 
     *
     * @return ChtypeCharge
     */
    public function getCharge()
    {
        return $this->charge;
    }
    /**
     * 
     *
     * @param ChtypeCharge $charge
     *
     * @return self
     */
    public function setCharge(ChtypeCharge $charge)
    {
        $this->charge = $charge;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeChargeMeta
     */
    public function getMeta()
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param ChtypeChargeMeta $meta
     *
     * @return self
     */
    public function setMeta(ChtypeChargeMeta $meta)
    {
        $this->meta = $meta;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }
    /**
     * 
     *
     * @param \DateTime $createdTime
     *
     * @return self
     */
    public function setCreatedTime(\DateTime $createdTime)
    {
        $this->createdTime = $createdTime;
        return $this;
    }
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
     * @return \DateTime
     */
    public function getInitiatedTime()
    {
        return $this->initiatedTime;
    }
    /**
     * 
     *
     * @param \DateTime $initiatedTime
     *
     * @return self
     */
    public function setInitiatedTime(\DateTime $initiatedTime)
    {
        $this->initiatedTime = $initiatedTime;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getLastAttemptTime()
    {
        return $this->lastAttemptTime;
    }
    /**
     * 
     *
     * @param \DateTime $lastAttemptTime
     *
     * @return self
     */
    public function setLastAttemptTime(\DateTime $lastAttemptTime)
    {
        $this->lastAttemptTime = $lastAttemptTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTotalAuthed()
    {
        return $this->totalAuthed;
    }
    /**
     * 
     *
     * @param string $totalAuthed
     *
     * @return self
     */
    public function setTotalAuthed(string $totalAuthed)
    {
        $this->totalAuthed = $totalAuthed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTotalCaptured()
    {
        return $this->totalCaptured;
    }
    /**
     * 
     *
     * @param string $totalCaptured
     *
     * @return self
     */
    public function setTotalCaptured(string $totalCaptured)
    {
        $this->totalCaptured = $totalCaptured;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTotalRefunded()
    {
        return $this->totalRefunded;
    }
    /**
     * 
     *
     * @param string $totalRefunded
     *
     * @return self
     */
    public function setTotalRefunded(string $totalRefunded)
    {
        $this->totalRefunded = $totalRefunded;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMerchantSubscriptionId()
    {
        return $this->merchantSubscriptionId;
    }
    /**
     * 
     *
     * @param string $merchantSubscriptionId
     *
     * @return self
     */
    public function setMerchantSubscriptionId(string $merchantSubscriptionId)
    {
        $this->merchantSubscriptionId = $merchantSubscriptionId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
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
        return ['charge' => $this->charge, 'meta' => $this->meta, 'createdTime' => $this->createdTime, 'chargeId' => $this->chargeId, 'initiatedTime' => $this->initiatedTime, 'lastAttemptTime' => $this->lastAttemptTime, 'status' => $this->status, 'totalAuthed' => $this->totalAuthed, 'totalCaptured' => $this->totalCaptured, 'totalRefunded' => $this->totalRefunded, 'merchantSubscriptionId' => $this->merchantSubscriptionId, 'country' => $this->country, 'labels' => $this->labels];
    }
}