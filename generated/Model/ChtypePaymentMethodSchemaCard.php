<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePaymentMethodSchemaCard
{
    /**
     * 
     *
     * @var string
     */
    protected $nameOnCard;
    /**
     * 
     *
     * @var int
     */
    protected $validFromMonth;
    /**
     * 
     *
     * @var int
     */
    protected $validFromYear;
    /**
     * 
     *
     * @var int
     */
    protected $expiryMonth;
    /**
     * 
     *
     * @var int
     */
    protected $expiryYear;
    /**
     * 
     *
     * @var int
     */
    protected $issueNumber;
    /**
     * 
     *
     * @var string
     */
    protected $number;
    /**
     * 
     *
     * @return string
     */
    public function getNameOnCard() : string
    {
        return $this->nameOnCard;
    }
    /**
     * 
     *
     * @param string $nameOnCard
     *
     * @return self
     */
    public function setNameOnCard(string $nameOnCard) : self
    {
        $this->nameOnCard = $nameOnCard;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidFromMonth() : int
    {
        return $this->validFromMonth;
    }
    /**
     * 
     *
     * @param int $validFromMonth
     *
     * @return self
     */
    public function setValidFromMonth(int $validFromMonth) : self
    {
        $this->validFromMonth = $validFromMonth;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidFromYear() : int
    {
        return $this->validFromYear;
    }
    /**
     * 
     *
     * @param int $validFromYear
     *
     * @return self
     */
    public function setValidFromYear(int $validFromYear) : self
    {
        $this->validFromYear = $validFromYear;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpiryMonth() : int
    {
        return $this->expiryMonth;
    }
    /**
     * 
     *
     * @param int $expiryMonth
     *
     * @return self
     */
    public function setExpiryMonth(int $expiryMonth) : self
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpiryYear() : int
    {
        return $this->expiryYear;
    }
    /**
     * 
     *
     * @param int $expiryYear
     *
     * @return self
     */
    public function setExpiryYear(int $expiryYear) : self
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIssueNumber() : int
    {
        return $this->issueNumber;
    }
    /**
     * 
     *
     * @param int $issueNumber
     *
     * @return self
     */
    public function setIssueNumber(int $issueNumber) : self
    {
        $this->issueNumber = $issueNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->number = $number;
        return $this;
    }
}