<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeChargeMeta implements \JsonSerializable
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
    public function getBillingAddress()
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
    public function setBillingAddress(ChtypeAddress $billingAddress)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAddress
     */
    public function getDeliveryAddress()
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
    public function setDeliveryAddress(ChtypeAddress $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeChargeItem[]
     */
    public function getItems()
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
    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTerms()
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
    public function setTerms(string $terms)
    {
        $this->terms = $terms;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNote()
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
    public function setNote(string $note)
    {
        $this->note = $note;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMerchantMemo()
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
    public function setMerchantMemo(string $merchantMemo)
    {
        $this->merchantMemo = $merchantMemo;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
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
    public function setInvoiceDate(\DateTime $invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDueDate()
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
    public function setDueDate(\DateTime $dueDate)
    {
        $this->dueDate = $dueDate;
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
     * @return ChtypeAmount
     */
    public function getDeliveryAmount()
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
    public function setDeliveryAmount(ChtypeAmount $deliveryAmount)
    {
        $this->deliveryAmount = $deliveryAmount;
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
    public function getTotalAmount()
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
    public function setTotalAmount(ChtypeAmount $totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypePerson
     */
    public function getPerson()
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
    public function setPerson(ChtypePerson $person)
    {
        $this->person = $person;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeCompany
     */
    public function getCompany()
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
    public function setCompany(ChtypeCompany $company)
    {
        $this->company = $company;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIpAddress()
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
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress = $ipAddress;
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
     * @return ChtypeDevice
     */
    public function getDevice()
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
    public function setDevice(ChtypeDevice $device)
    {
        $this->device = $device;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerId()
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
    public function setCustomerId(string $customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlacementId()
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
    public function setPlacementId(string $placementId)
    {
        $this->placementId = $placementId;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['billingAddress' => $this->billingAddress, 'deliveryAddress' => $this->deliveryAddress, 'items' => $this->items, 'terms' => $this->terms, 'note' => $this->note, 'merchantMemo' => $this->merchantMemo, 'invoiceDate' => $this->invoiceDate, 'dueDate' => $this->dueDate, 'discountAmount' => $this->discountAmount, 'deliveryAmount' => $this->deliveryAmount, 'taxAmount' => $this->taxAmount, 'totalAmount' => $this->totalAmount, 'person' => $this->person, 'company' => $this->company, 'ipAddress' => $this->ipAddress, 'delivery' => $this->delivery, 'device' => $this->device, 'customerId' => $this->customerId, 'placementId' => $this->placementId];
    }
}