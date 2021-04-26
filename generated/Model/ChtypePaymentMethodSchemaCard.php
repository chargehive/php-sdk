<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePaymentMethodSchemaCard implements \JsonSerializable
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
    public function getNameOnCard()
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
    public function setNameOnCard(string $nameOnCard)
    {
        $this->nameOnCard = $nameOnCard;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidFromMonth()
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
    public function setValidFromMonth(int $validFromMonth)
    {
        $this->validFromMonth = $validFromMonth;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValidFromYear()
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
    public function setValidFromYear(int $validFromYear)
    {
        $this->validFromYear = $validFromYear;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpiryMonth()
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
    public function setExpiryMonth(int $expiryMonth)
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpiryYear()
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
    public function setExpiryYear(int $expiryYear)
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIssueNumber()
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
    public function setIssueNumber(int $issueNumber)
    {
        $this->issueNumber = $issueNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumber()
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
    public function setNumber(string $number)
    {
        $this->number = $number;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['nameOnCard' => $this->nameOnCard, 'validFromMonth' => $this->validFromMonth, 'validFromYear' => $this->validFromYear, 'expiryMonth' => $this->expiryMonth, 'expiryYear' => $this->expiryYear, 'issueNumber' => $this->issueNumber, 'number' => $this->number];
    }
}