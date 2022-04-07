<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodTokenizeRequest implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $dataLocation = 'COUNTRY_CODE_INVALID';
    /**
     * 
     *
     * @var ChtypePaymentMethod
     */
    protected $method;
    /**
     * 
     *
     * @var string
     */
    protected $displayName;
    /**
     * 
     *
     * @var ChtypePaymentMethodVerificationItem[]
     */
    protected $paymentMethodVerification;
    /**
     * 
     *
     * @var string[]
     */
    protected $references;
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
    protected $verifyChargeId;
    /**
     * 
     *
     * @var string[]
     */
    protected $additionalData;
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
    protected $billingProfileId;
    /**
     * 
     *
     * @return string
     */
    public function getDataLocation()
    {
        return $this->dataLocation;
    }
    /**
     * 
     *
     * @param string $dataLocation
     *
     * @return self
     */
    public function setDataLocation(string $dataLocation)
    {
        $this->dataLocation = $dataLocation;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypePaymentMethod
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * 
     *
     * @param ChtypePaymentMethod $method
     *
     * @return self
     */
    public function setMethod(ChtypePaymentMethod $method)
    {
        $this->method = $method;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypePaymentMethodVerificationItem[]
     */
    public function getPaymentMethodVerification()
    {
        return $this->paymentMethodVerification;
    }
    /**
     * 
     *
     * @param ChtypePaymentMethodVerificationItem[] $paymentMethodVerification
     *
     * @return self
     */
    public function setPaymentMethodVerification(array $paymentMethodVerification)
    {
        $this->paymentMethodVerification = $paymentMethodVerification;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getReferences()
    {
        return $this->references;
    }
    /**
     * 
     *
     * @param string[] $references
     *
     * @return self
     */
    public function setReferences(\ArrayObject $references)
    {
        $this->references = $references;
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
    public function getVerifyChargeId()
    {
        return $this->verifyChargeId;
    }
    /**
     * 
     *
     * @param string $verifyChargeId
     *
     * @return self
     */
    public function setVerifyChargeId(string $verifyChargeId)
    {
        $this->verifyChargeId = $verifyChargeId;
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
    public function jsonSerialize()
    {
        return ['dataLocation' => $this->dataLocation, 'method' => $this->method, 'displayName' => $this->displayName, 'paymentMethodVerification' => $this->paymentMethodVerification, 'references' => $this->references, 'labels' => $this->labels, 'verifyChargeId' => $this->verifyChargeId, 'additionalData' => $this->additionalData, 'chargeMeta' => $this->chargeMeta, 'billingProfileId' => $this->billingProfileId];
    }
}