<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeTransaction
{
    /**
     * 
     *
     * @var string
     */
    protected $tokenId;
    /**
     * 
     *
     * @var string
     */
    protected $transactionId;
    /**
     * 
     *
     * @var ChtypeTransactionDetail[]
     */
    protected $details;
    /**
     * 
     *
     * @var string
     */
    protected $paymentType = 'PAYMENT_METHOD_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $paymentScheme;
    /**
     * 
     *
     * @var string
     */
    protected $transactionType = 'TRANSACTION_TYPE_INVALID';
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $requestAmount;
    /**
     * 
     *
     * @var ChtypeAmount
     */
    protected $transactedAmount;
    /**
     * 
     *
     * @var string
     */
    protected $contract = 'CONTRACT_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $statementDescriptor;
    /**
     * 
     *
     * @var string
     */
    protected $result = 'TRANSACTION_RESULT_INVALID';
    /**
     * 
     *
     * @var ChtypeVerifyRequestData
     */
    protected $verifyRequest;
    /**
     * 
     *
     * @var string
     */
    protected $failureType = 'FAILURE_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $arn;
    /**
     * 
     *
     * @var string
     */
    protected $verified = 'VERIFICATION_STATUS_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $liability = 'LIABILITY_INVALID';
    /**
     * 
     *
     * @var ChtypeAttemptDetail
     */
    protected $attemptDetail;
    /**
     * 
     *
     * @var ChtypeFraudResult[]
     */
    protected $fraudResults;
    /**
     * 
     *
     * @var ChtypeResponseDetail
     */
    protected $response;
    /**
     * 
     *
     * @var string
     */
    protected $sourceTransactionId;
    /**
     * 
     *
     * @var string
     */
    protected $paymentMethodId;
    /**
     * 
     *
     * @var string
     */
    protected $transactionSubType = 'TRANSACTION_SUB_TYPE_INVALID';
    /**
     * 
     *
     * @var ChtypeTransaction[]
     */
    protected $ancillaryTransactions;
    /**
     * 
     *
     * @var string
     */
    protected $requestedConnectorId;
    /**
     * 
     *
     * @var string
     */
    protected $requestedConnectorLibrary;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $transactionTime;
    /**
     * 
     *
     * @var string
     */
    protected $paymentProvider = 'PAYMENT_METHOD_PROVIDER_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $paymentInputType = 'INPUT_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $authCode;
    /**
     * 
     *
     * @return string
     */
    public function getTokenId() : string
    {
        return $this->tokenId;
    }
    /**
     * 
     *
     * @param string $tokenId
     *
     * @return self
     */
    public function setTokenId(string $tokenId) : self
    {
        $this->tokenId = $tokenId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransactionId() : string
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
    public function setTransactionId(string $transactionId) : self
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeTransactionDetail[]
     */
    public function getDetails() : array
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param ChtypeTransactionDetail[] $details
     *
     * @return self
     */
    public function setDetails(array $details) : self
    {
        $this->details = $details;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentType() : string
    {
        return $this->paymentType;
    }
    /**
     * 
     *
     * @param string $paymentType
     *
     * @return self
     */
    public function setPaymentType(string $paymentType) : self
    {
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentScheme() : string
    {
        return $this->paymentScheme;
    }
    /**
     * 
     *
     * @param string $paymentScheme
     *
     * @return self
     */
    public function setPaymentScheme(string $paymentScheme) : self
    {
        $this->paymentScheme = $paymentScheme;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransactionType() : string
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
    public function setTransactionType(string $transactionType) : self
    {
        $this->transactionType = $transactionType;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getRequestAmount() : ChtypeAmount
    {
        return $this->requestAmount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $requestAmount
     *
     * @return self
     */
    public function setRequestAmount(ChtypeAmount $requestAmount) : self
    {
        $this->requestAmount = $requestAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getTransactedAmount() : ChtypeAmount
    {
        return $this->transactedAmount;
    }
    /**
     * 
     *
     * @param ChtypeAmount $transactedAmount
     *
     * @return self
     */
    public function setTransactedAmount(ChtypeAmount $transactedAmount) : self
    {
        $this->transactedAmount = $transactedAmount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContract() : string
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
    public function setContract(string $contract) : self
    {
        $this->contract = $contract;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatementDescriptor() : string
    {
        return $this->statementDescriptor;
    }
    /**
     * 
     *
     * @param string $statementDescriptor
     *
     * @return self
     */
    public function setStatementDescriptor(string $statementDescriptor) : self
    {
        $this->statementDescriptor = $statementDescriptor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResult() : string
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param string $result
     *
     * @return self
     */
    public function setResult(string $result) : self
    {
        $this->result = $result;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeVerifyRequestData
     */
    public function getVerifyRequest() : ChtypeVerifyRequestData
    {
        return $this->verifyRequest;
    }
    /**
     * 
     *
     * @param ChtypeVerifyRequestData $verifyRequest
     *
     * @return self
     */
    public function setVerifyRequest(ChtypeVerifyRequestData $verifyRequest) : self
    {
        $this->verifyRequest = $verifyRequest;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFailureType() : string
    {
        return $this->failureType;
    }
    /**
     * 
     *
     * @param string $failureType
     *
     * @return self
     */
    public function setFailureType(string $failureType) : self
    {
        $this->failureType = $failureType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArn() : string
    {
        return $this->arn;
    }
    /**
     * 
     *
     * @param string $arn
     *
     * @return self
     */
    public function setArn(string $arn) : self
    {
        $this->arn = $arn;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVerified() : string
    {
        return $this->verified;
    }
    /**
     * 
     *
     * @param string $verified
     *
     * @return self
     */
    public function setVerified(string $verified) : self
    {
        $this->verified = $verified;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLiability() : string
    {
        return $this->liability;
    }
    /**
     * 
     *
     * @param string $liability
     *
     * @return self
     */
    public function setLiability(string $liability) : self
    {
        $this->liability = $liability;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAttemptDetail
     */
    public function getAttemptDetail() : ChtypeAttemptDetail
    {
        return $this->attemptDetail;
    }
    /**
     * 
     *
     * @param ChtypeAttemptDetail $attemptDetail
     *
     * @return self
     */
    public function setAttemptDetail(ChtypeAttemptDetail $attemptDetail) : self
    {
        $this->attemptDetail = $attemptDetail;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeFraudResult[]
     */
    public function getFraudResults() : array
    {
        return $this->fraudResults;
    }
    /**
     * 
     *
     * @param ChtypeFraudResult[] $fraudResults
     *
     * @return self
     */
    public function setFraudResults(array $fraudResults) : self
    {
        $this->fraudResults = $fraudResults;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeResponseDetail
     */
    public function getResponse() : ChtypeResponseDetail
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param ChtypeResponseDetail $response
     *
     * @return self
     */
    public function setResponse(ChtypeResponseDetail $response) : self
    {
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSourceTransactionId() : string
    {
        return $this->sourceTransactionId;
    }
    /**
     * 
     *
     * @param string $sourceTransactionId
     *
     * @return self
     */
    public function setSourceTransactionId(string $sourceTransactionId) : self
    {
        $this->sourceTransactionId = $sourceTransactionId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentMethodId() : string
    {
        return $this->paymentMethodId;
    }
    /**
     * 
     *
     * @param string $paymentMethodId
     *
     * @return self
     */
    public function setPaymentMethodId(string $paymentMethodId) : self
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransactionSubType() : string
    {
        return $this->transactionSubType;
    }
    /**
     * 
     *
     * @param string $transactionSubType
     *
     * @return self
     */
    public function setTransactionSubType(string $transactionSubType) : self
    {
        $this->transactionSubType = $transactionSubType;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeTransaction[]
     */
    public function getAncillaryTransactions() : array
    {
        return $this->ancillaryTransactions;
    }
    /**
     * 
     *
     * @param ChtypeTransaction[] $ancillaryTransactions
     *
     * @return self
     */
    public function setAncillaryTransactions(array $ancillaryTransactions) : self
    {
        $this->ancillaryTransactions = $ancillaryTransactions;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequestedConnectorId() : string
    {
        return $this->requestedConnectorId;
    }
    /**
     * 
     *
     * @param string $requestedConnectorId
     *
     * @return self
     */
    public function setRequestedConnectorId(string $requestedConnectorId) : self
    {
        $this->requestedConnectorId = $requestedConnectorId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequestedConnectorLibrary() : string
    {
        return $this->requestedConnectorLibrary;
    }
    /**
     * 
     *
     * @param string $requestedConnectorLibrary
     *
     * @return self
     */
    public function setRequestedConnectorLibrary(string $requestedConnectorLibrary) : self
    {
        $this->requestedConnectorLibrary = $requestedConnectorLibrary;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTransactionTime() : \DateTime
    {
        return $this->transactionTime;
    }
    /**
     * 
     *
     * @param \DateTime $transactionTime
     *
     * @return self
     */
    public function setTransactionTime(\DateTime $transactionTime) : self
    {
        $this->transactionTime = $transactionTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentProvider() : string
    {
        return $this->paymentProvider;
    }
    /**
     * 
     *
     * @param string $paymentProvider
     *
     * @return self
     */
    public function setPaymentProvider(string $paymentProvider) : self
    {
        $this->paymentProvider = $paymentProvider;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentInputType() : string
    {
        return $this->paymentInputType;
    }
    /**
     * 
     *
     * @param string $paymentInputType
     *
     * @return self
     */
    public function setPaymentInputType(string $paymentInputType) : self
    {
        $this->paymentInputType = $paymentInputType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthCode() : string
    {
        return $this->authCode;
    }
    /**
     * 
     *
     * @param string $authCode
     *
     * @return self
     */
    public function setAuthCode(string $authCode) : self
    {
        $this->authCode = $authCode;
        return $this;
    }
}