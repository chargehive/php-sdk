<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodVerifyRequest implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $amount;
    /**
     * 
     *
     * @var string
     */
    protected $connectorId;
    /**
     * 
     *
     * @var string
     */
    protected $chargeId;
    /**
     * 
     *
     * @var string
     */
    protected $billingProfileId;
    /**
     * 
     *
     * @var string
     */
    protected $accountHolder;
    /**
     * 
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * 
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token)
    {
        $this->token = $token;
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
     * @return string
     */
    public function getConnectorId()
    {
        return $this->connectorId;
    }
    /**
     * 
     *
     * @param string $connectorId
     *
     * @return self
     */
    public function setConnectorId(string $connectorId)
    {
        $this->connectorId = $connectorId;
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
    /**
     * 
     *
     * @return string
     */
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }
    /**
     * 
     *
     * @param string $accountHolder
     *
     * @return self
     */
    public function setAccountHolder(string $accountHolder)
    {
        $this->accountHolder = $accountHolder;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['token' => $this->token, 'amount' => $this->amount, 'connectorId' => $this->connectorId, 'chargeId' => $this->chargeId, 'billingProfileId' => $this->billingProfileId, 'accountHolder' => $this->accountHolder];
    }
}