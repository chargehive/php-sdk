<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeInitialTransactionData implements \JsonSerializable
{
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
    protected $transactionId;
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
    protected $networkId;
    /**
     * 
     *
     * @var string
     */
    protected $transactionType = 'TRANSACTION_TYPE_INVALID';
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
    public function getTransactionId()
    {
        return $this->transactionId;
    }
    /**
     * 
     *
     * @param string $transactionId
     *
     * @return self
     */
    public function setTransactionId(string $transactionId)
    {
        $this->transactionId = $transactionId;
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
    public function getNetworkId()
    {
        return $this->networkId;
    }
    /**
     * 
     *
     * @param string $networkId
     *
     * @return self
     */
    public function setNetworkId(string $networkId)
    {
        $this->networkId = $networkId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }
    /**
     * 
     *
     * @param string $transactionType
     *
     * @return self
     */
    public function setTransactionType(string $transactionType)
    {
        $this->transactionType = $transactionType;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['chargeId' => $this->chargeId, 'transactionId' => $this->transactionId, 'connectorId' => $this->connectorId, 'networkId' => $this->networkId, 'transactionType' => $this->transactionType];
    }
}