<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeCharge implements \JsonSerializable
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
    protected $version;
    /**
     * 
     *
     * @var string
     */
    protected $intent = 'CHARGE_INTENT_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $contract = 'CONTRACT_TYPE_INVALID';
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $amount;
    /**
     * 
     *
     * @var string[]
     */
    protected $paymentMethodIds;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $expiryTime;
    /**
     * 
     *
     * @var string
     */
    protected $merchantReference;
    /**
     * 
     *
     * @var ChtypeStatementDescriptor
     */
    protected $statementDescriptor;
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
    protected $chargeKey;
    /**
     * 
     *
     * @var string
     */
    protected $userLocale;
    /**
     * 
     *
     * @var string
     */
    protected $userLocation;
    /**
     * 
     *
     * @var string
     */
    protected $environment = 'CHARGE_ENVIRONMENT_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $language = 'LANGUAGE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $preferredMethodType = 'PAYMENT_METHOD_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $billingProfileId;
    /**
     * 
     *
     * @var ChtypeInitialTransactionData[]
     */
    protected $initialTransaction;
    /**
     * 
     *
     * @var string
     */
    protected $subscriptionId;
    /**
     * 
     *
     * @var string
     */
    protected $challengeWindowSize;
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
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIntent()
    {
        return $this->intent;
    }
    /**
     * 
     *
     * @param string $intent
     *
     * @return self
     */
    public function setIntent(string $intent)
    {
        $this->intent = $intent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }
    /**
     * 
     *
     * @param string $contract
     *
     * @return self
     */
    public function setContract(string $contract)
    {
        $this->contract = $contract;
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
     * @return string[]
     */
    public function getPaymentMethodIds()
    {
        return $this->paymentMethodIds;
    }
    /**
     * 
     *
     * @param string[] $paymentMethodIds
     *
     * @return self
     */
    public function setPaymentMethodIds(array $paymentMethodIds)
    {
        $this->paymentMethodIds = $paymentMethodIds;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }
    /**
     * 
     *
     * @param \DateTime $expiryTime
     *
     * @return self
     */
    public function setExpiryTime(\DateTime $expiryTime)
    {
        $this->expiryTime = $expiryTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }
    /**
     * 
     *
     * @param string $merchantReference
     *
     * @return self
     */
    public function setMerchantReference(string $merchantReference)
    {
        $this->merchantReference = $merchantReference;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeStatementDescriptor
     */
    public function getStatementDescriptor()
    {
        return $this->statementDescriptor;
    }
    /**
     * 
     *
     * @param ChtypeStatementDescriptor $statementDescriptor
     *
     * @return self
     */
    public function setStatementDescriptor(ChtypeStatementDescriptor $statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;
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
    public function getChargeKey()
    {
        return $this->chargeKey;
    }
    /**
     * 
     *
     * @param string $chargeKey
     *
     * @return self
     */
    public function setChargeKey(string $chargeKey)
    {
        $this->chargeKey = $chargeKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserLocale()
    {
        return $this->userLocale;
    }
    /**
     * 
     *
     * @param string $userLocale
     *
     * @return self
     */
    public function setUserLocale(string $userLocale)
    {
        $this->userLocale = $userLocale;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserLocation()
    {
        return $this->userLocation;
    }
    /**
     * 
     *
     * @param string $userLocation
     *
     * @return self
     */
    public function setUserLocation(string $userLocation)
    {
        $this->userLocation = $userLocation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }
    /**
     * 
     *
     * @param string $environment
     *
     * @return self
     */
    public function setEnvironment(string $environment)
    {
        $this->environment = $environment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreferredMethodType()
    {
        return $this->preferredMethodType;
    }
    /**
     * 
     *
     * @param string $preferredMethodType
     *
     * @return self
     */
    public function setPreferredMethodType(string $preferredMethodType)
    {
        $this->preferredMethodType = $preferredMethodType;
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
     * @return ChtypeInitialTransactionData[]
     */
    public function getInitialTransaction()
    {
        return $this->initialTransaction;
    }
    /**
     * 
     *
     * @param ChtypeInitialTransactionData[] $initialTransaction
     *
     * @return self
     */
    public function setInitialTransaction(array $initialTransaction)
    {
        $this->initialTransaction = $initialTransaction;
        return $this;
    }
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
     * @return string
     */
    public function getChallengeWindowSize()
    {
        return $this->challengeWindowSize;
    }
    /**
     * 
     *
     * @param string $challengeWindowSize
     *
     * @return self
     */
    public function setChallengeWindowSize(string $challengeWindowSize)
    {
        $this->challengeWindowSize = $challengeWindowSize;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['chargeId' => $this->chargeId, 'version' => $this->version, 'intent' => $this->intent, 'contract' => $this->contract, 'amount' => $this->amount, 'paymentMethodIds' => $this->paymentMethodIds, 'expiryTime' => $this->expiryTime, 'merchantReference' => $this->merchantReference, 'statementDescriptor' => $this->statementDescriptor, 'references' => $this->references, 'labels' => $this->labels, 'chargeKey' => $this->chargeKey, 'userLocale' => $this->userLocale, 'userLocation' => $this->userLocation, 'environment' => $this->environment, 'language' => $this->language, 'preferredMethodType' => $this->preferredMethodType, 'billingProfileId' => $this->billingProfileId, 'initialTransaction' => $this->initialTransaction, 'subscriptionId' => $this->subscriptionId, 'challengeWindowSize' => $this->challengeWindowSize];
    }
}