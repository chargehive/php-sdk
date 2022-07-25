<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeChargeMeta
{
    /**
     * 
     *
     * @var ChtypeAddress
     */
    protected $billingAddress;
    /**
     * 
     *
     * @var ChtypeAddress
     */
    protected $deliveryAddress;
    /**
     * 
     *
     * @var ChtypeChargeItem[]
     */
    protected $items;
    /**
     * 
     *
     * @var string
     */
    protected $terms;
    /**
     * 
     *
     * @var string
     */
    protected $note;
    /**
     * 
     *
     * @var string
     */
    protected $merchantMemo;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $invoiceDate;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $dueDate;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $discountAmount;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $deliveryAmount;
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
    protected $totalAmount;
    /**
     * 
     *
     * @var ChtypePerson
     */
    protected $person;
    /**
     * 
     *
     * @var ChtypeCompany
     */
    protected $company;
    /**
     * 
     *
     * @var string
     */
    protected $ipAddress;
    /**
     * 
     *
     * @var ChtypeDelivery
     */
    protected $delivery;
    /**
     * 
     *
     * @var ChtypeDevice
     */
    protected $device;
    /**
     * 
     *
     * @var string
     */
    protected $customerId;
    /**
     * 
     *
     * @var string
     */
    protected $placementId;
    /**
     * 
     *
     * @return ChtypeAddress
     */
    public function getBillingAddress() : ChtypeAddress
    {
        return $this->billingAddress;
    }
    /**
     * 
     *
     * @param ChtypeAddress $billingAddress
     *
     * @return self
     */
    public function setBillingAddress(ChtypeAddress $billingAddress) : self
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAddress
     */
    public function getDeliveryAddress() : ChtypeAddress
    {
        return $this->deliveryAddress;
    }
    /**
     * 
     *
     * @param ChtypeAddress $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(ChtypeAddress $deliveryAddress) : self
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeChargeItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param ChtypeChargeItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTerms() : string
    {
        return $this->terms;
    }
    /**
     * 
     *
     * @param string $terms
     *
     * @return self
     */
    public function setTerms(string $terms) : self
    {
        $this->terms = $terms;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNote() : string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note) : self
    {
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMerchantMemo() : string
    {
        return $this->merchantMemo;
    }
    /**
     * 
     *
     * @param string $merchantMemo
     *
     * @return self
     */
    public function setMerchantMemo(string $merchantMemo) : self
    {
        $this->merchantMemo = $merchantMemo;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getInvoiceDate() : \DateTime
    {
        return $this->invoiceDate;
    }
    /**
     * 
     *
     * @param \DateTime $invoiceDate
     *
     * @return self
     */
    public function setInvoiceDate(\DateTime $invoiceDate) : self
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDueDate() : \DateTime
    {
        return $this->dueDate;
    }
    /**
     * 
     *
     * @param \DateTime $dueDate
     *
     * @return self
     */
    public function setDueDate(\DateTime $dueDate) : self
    {
        $this->dueDate = $dueDate;
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
     * @return ChtypeAmount
     */
    public function getDeliveryAmount() : ChtypeAmount
    {
        return $this->deliveryAmount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $deliveryAmount
     *
     * @return self
     */
    public function setDeliveryAmount(ChtypeAmount $deliveryAmount) : self
    {
        $this->deliveryAmount = $deliveryAmount;
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
    public function getTotalAmount() : ChtypeAmount
    {
        return $this->totalAmount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(ChtypeAmount $totalAmount) : self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypePerson
     */
    public function getPerson() : ChtypePerson
    {
        return $this->person;
    }
    /**
     * 
     *
     * @param ChtypePerson $person
     *
     * @return self
     */
    public function setPerson(ChtypePerson $person) : self
    {
        $this->person = $person;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeCompany
     */
    public function getCompany() : ChtypeCompany
    {
        return $this->company;
    }
    /**
     * 
     *
     * @param ChtypeCompany $company
     *
     * @return self
     */
    public function setCompany(ChtypeCompany $company) : self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }
    /**
     * 
     *
     * @param string $ipAddress
     *
     * @return self
     */
    public function setIpAddress(string $ipAddress) : self
    {
        $this->ipAddress = $ipAddress;
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
     * @return ChtypeDevice
     */
    public function getDevice() : ChtypeDevice
    {
        return $this->device;
    }
    /**
     * 
     *
     * @param ChtypeDevice $device
     *
     * @return self
     */
    public function setDevice(ChtypeDevice $device) : self
    {
        $this->device = $device;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerId() : string
    {
        return $this->customerId;
    }
    /**
     * 
     *
     * @param string $customerId
     *
     * @return self
     */
    public function setCustomerId(string $customerId) : self
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlacementId() : string
    {
        return $this->placementId;
    }
    /**
     * 
     *
     * @param string $placementId
     *
     * @return self
     */
    public function setPlacementId(string $placementId) : self
    {
        $this->placementId = $placementId;
        return $this;
    }
}