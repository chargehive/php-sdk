<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeChargeItem
{
    /**
     * 
     *
     * @var string
     */
    protected $subscriptionId;
    /**
     * 
     *
     * @var int
     */
    protected $renewalNumber;
    /**
     * 
     *
     * @var string
     */
    protected $duration;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $endDate;
    /**
     * 
     *
     * @var string
     */
    protected $productType = 'PRODUCT_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $skuType = 'SKU_TYPE_INVALID';
    /**
     * 
     *
     * @var ChtypeDelivery
     */
    protected $delivery;
    /**
     * 
     *
     * @var string
     */
    protected $quantity;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $unitPrice;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $taxAmount;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $discountAmount;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $productCode;
    /**
     * 
     *
     * @var string
     */
    protected $skuCode;
    /**
     * 
     *
     * @var string
     */
    protected $termUnits;
    /**
     * 
     *
     * @var string
     */
    protected $termType = 'TERM_TYPE_INVALID';
    /**
     * 
     *
     * @return string
     */
    public function getSubscriptionId() : string
    {
        return $this->subscriptionId;
    }
    /**
     * 
     *
     * @param string $subscriptionId
     *
     * @return self
     */
    public function setSubscriptionId(string $subscriptionId) : self
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRenewalNumber() : int
    {
        return $this->renewalNumber;
    }
    /**
     * 
     *
     * @param int $renewalNumber
     *
     * @return self
     */
    public function setRenewalNumber(int $renewalNumber) : self
    {
        $this->renewalNumber = $renewalNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDuration() : string
    {
        return $this->duration;
    }
    /**
     * 
     *
     * @param string $duration
     *
     * @return self
     */
    public function setDuration(string $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getEndDate() : \DateTime
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductType() : string
    {
        return $this->productType;
    }
    /**
     * 
     *
     * @param string $productType
     *
     * @return self
     */
    public function setProductType(string $productType) : self
    {
        $this->productType = $productType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSkuType() : string
    {
        return $this->skuType;
    }
    /**
     * 
     *
     * @param string $skuType
     *
     * @return self
     */
    public function setSkuType(string $skuType) : self
    {
        $this->skuType = $skuType;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeDelivery
     */
    public function getDelivery() : ChtypeDelivery
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param ChtypeDelivery $delivery
     *
     * @return self
     */
    public function setDelivery(ChtypeDelivery $delivery) : self
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuantity() : string
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param string $quantity
     *
     * @return self
     */
    public function setQuantity(string $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getUnitPrice() : ChtypeAmount
    {
        return $this->unitPrice;
    }
    /**
     * 
     *
     * @param ChtypeAmount $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(ChtypeAmount $unitPrice) : self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getTaxAmount() : ChtypeAmount
    {
        return $this->taxAmount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $taxAmount
     *
     * @return self
     */
    public function setTaxAmount(ChtypeAmount $taxAmount) : self
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getDiscountAmount() : ChtypeAmount
    {
        return $this->discountAmount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount(ChtypeAmount $discountAmount) : self
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductCode() : string
    {
        return $this->productCode;
    }
    /**
     * 
     *
     * @param string $productCode
     *
     * @return self
     */
    public function setProductCode(string $productCode) : self
    {
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSkuCode() : string
    {
        return $this->skuCode;
    }
    /**
     * 
     *
     * @param string $skuCode
     *
     * @return self
     */
    public function setSkuCode(string $skuCode) : self
    {
        $this->skuCode = $skuCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTermUnits() : string
    {
        return $this->termUnits;
    }
    /**
     * 
     *
     * @param string $termUnits
     *
     * @return self
     */
    public function setTermUnits(string $termUnits) : self
    {
        $this->termUnits = $termUnits;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTermType() : string
    {
        return $this->termType;
    }
    /**
     * 
     *
     * @param string $termType
     *
     * @return self
     */
    public function setTermType(string $termType) : self
    {
        $this->termType = $termType;
        return $this;
    }
}