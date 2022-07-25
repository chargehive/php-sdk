<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodTokenizeRequest
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
    public function getDataLocation() : string
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
    public function setDataLocation(string $dataLocation) : self
    {
        $this->dataLocation = $dataLocation;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypePaymentMethod
     */
    public function getMethod() : ChtypePaymentMethod
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
    public function setMethod(ChtypePaymentMethod $method) : self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisplayName() : string
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
    public function setDisplayName(string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypePaymentMethodVerificationItem[]
     */
    public function getPaymentMethodVerification() : array
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
    public function setPaymentMethodVerification(array $paymentMethodVerification) : self
    {
        $this->paymentMethodVerification = $paymentMethodVerification;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getReferences() : \ArrayObject
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
    public function setReferences(\ArrayObject $references) : self
    {
        $this->references = $references;
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
    /**
     * 
     *
     * @return string
     */
    public function getVerifyChargeId() : string
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
    public function setVerifyChargeId(string $verifyChargeId) : self
    {
        $this->verifyChargeId = $verifyChargeId;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAdditionalData() : \ArrayObject
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
    public function setAdditionalData(\ArrayObject $additionalData) : self
    {
        $this->additionalData = $additionalData;
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
    public function getBillingProfileId() : string
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
    public function setBillingProfileId(string $billingProfileId) : self
    {
        $this->billingProfileId = $billingProfileId;
        return $this;
    }
}