<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeChargeItem implements \JsonSerializable
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
    public function getSubscriptionId()
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
    public function setSubscriptionId(string $subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRenewalNumber()
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
    public function setRenewalNumber(int $renewalNumber)
    {
        $this->renewalNumber = $renewalNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDuration()
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
    public function setDuration(string $duration)
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getStartDate()
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
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getEndDate()
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
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductType()
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
    public function setProductType(string $productType)
    {
        $this->productType = $productType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSkuType()
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
    public function setSkuType(string $skuType)
    {
        $this->skuType = $skuType;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeDelivery
     */
    public function getDelivery()
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
    public function setDelivery(ChtypeDelivery $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuantity()
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
    public function setQuantity(string $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getUnitPrice()
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
    public function setUnitPrice(ChtypeAmount $unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getTaxAmount()
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
    public function setTaxAmount(ChtypeAmount $taxAmount)
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getDiscountAmount()
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
    public function setDiscountAmount(ChtypeAmount $discountAmount)
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName()
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
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription()
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
    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductCode()
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
    public function setProductCode(string $productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSkuCode()
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
    public function setSkuCode(string $skuCode)
    {
        $this->skuCode = $skuCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTermUnits()
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
    public function setTermUnits(string $termUnits)
    {
        $this->termUnits = $termUnits;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTermType()
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
    public function setTermType(string $termType)
    {
        $this->termType = $termType;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['subscriptionId' => $this->subscriptionId, 'renewalNumber' => $this->renewalNumber, 'duration' => $this->duration, 'startDate' => $this->startDate, 'endDate' => $this->endDate, 'productType' => $this->productType, 'skuType' => $this->skuType, 'delivery' => $this->delivery, 'quantity' => $this->quantity, 'unitPrice' => $this->unitPrice, 'taxAmount' => $this->taxAmount, 'discountAmount' => $this->discountAmount, 'name' => $this->name, 'description' => $this->description, 'productCode' => $this->productCode, 'skuCode' => $this->skuCode, 'termUnits' => $this->termUnits, 'termType' => $this->termType];
    }
}