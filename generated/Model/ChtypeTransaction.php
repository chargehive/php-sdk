<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeTransaction implements \JsonSerializable
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
     * @var string
     */
    protected $paymentMethodIssuer;
    /**
     * 
     *
     * @return string
     */
    public function getTokenId()
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
    public function setTokenId(string $tokenId)
    {
        $this->tokenId = $tokenId;
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
     * @return ChtypeTransactionDetail[]
     */
    public function getDetails()
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
    public function setDetails(array $details)
    {
        $this->details = $details;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentType()
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
    public function setPaymentType(string $paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentScheme()
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
    public function setPaymentScheme(string $paymentScheme)
    {
        $this->paymentScheme = $paymentScheme;
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
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getRequestAmount()
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
    public function setRequestAmount(ChtypeAmount $requestAmount)
    {
        $this->requestAmount = $requestAmount;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAmount
     */
    public function getTransactedAmount()
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
    public function setTransactedAmount(ChtypeAmount $transactedAmount)
    {
        $this->transactedAmount = $transactedAmount;
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
     * @return string
     */
    public function getStatementDescriptor()
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
    public function setStatementDescriptor(string $statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResult()
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
    public function setResult(string $result)
    {
        $this->result = $result;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeVerifyRequestData
     */
    public function getVerifyRequest()
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
    public function setVerifyRequest(ChtypeVerifyRequestData $verifyRequest)
    {
        $this->verifyRequest = $verifyRequest;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFailureType()
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
    public function setFailureType(string $failureType)
    {
        $this->failureType = $failureType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArn()
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
    public function setArn(string $arn)
    {
        $this->arn = $arn;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVerified()
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
    public function setVerified(string $verified)
    {
        $this->verified = $verified;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLiability()
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
    public function setLiability(string $liability)
    {
        $this->liability = $liability;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeAttemptDetail
     */
    public function getAttemptDetail()
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
    public function setAttemptDetail(ChtypeAttemptDetail $attemptDetail)
    {
        $this->attemptDetail = $attemptDetail;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeFraudResult[]
     */
    public function getFraudResults()
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
    public function setFraudResults(array $fraudResults)
    {
        $this->fraudResults = $fraudResults;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeResponseDetail
     */
    public function getResponse()
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
    public function setResponse(ChtypeResponseDetail $response)
    {
        $this->response = $response;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSourceTransactionId()
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
    public function setSourceTransactionId(string $sourceTransactionId)
    {
        $this->sourceTransactionId = $sourceTransactionId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentMethodId()
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
    public function setPaymentMethodId(string $paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransactionSubType()
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
    public function setTransactionSubType(string $transactionSubType)
    {
        $this->transactionSubType = $transactionSubType;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeTransaction[]
     */
    public function getAncillaryTransactions()
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
    public function setAncillaryTransactions(array $ancillaryTransactions)
    {
        $this->ancillaryTransactions = $ancillaryTransactions;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequestedConnectorId()
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
    public function setRequestedConnectorId(string $requestedConnectorId)
    {
        $this->requestedConnectorId = $requestedConnectorId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRequestedConnectorLibrary()
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
    public function setRequestedConnectorLibrary(string $requestedConnectorLibrary)
    {
        $this->requestedConnectorLibrary = $requestedConnectorLibrary;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTransactionTime()
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
    public function setTransactionTime(\DateTime $transactionTime)
    {
        $this->transactionTime = $transactionTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentProvider()
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
    public function setPaymentProvider(string $paymentProvider)
    {
        $this->paymentProvider = $paymentProvider;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentInputType()
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
    public function setPaymentInputType(string $paymentInputType)
    {
        $this->paymentInputType = $paymentInputType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthCode()
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
    public function setAuthCode(string $authCode)
    {
        $this->authCode = $authCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentMethodIssuer()
    {
        return $this->paymentMethodIssuer;
    }
    /**
     * 
     *
     * @param string $paymentMethodIssuer
     *
     * @return self
     */
    public function setPaymentMethodIssuer(string $paymentMethodIssuer)
    {
        $this->paymentMethodIssuer = $paymentMethodIssuer;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['tokenId' => $this->tokenId, 'transactionId' => $this->transactionId, 'details' => $this->details, 'paymentType' => $this->paymentType, 'paymentScheme' => $this->paymentScheme, 'transactionType' => $this->transactionType, 'requestAmount' => $this->requestAmount, 'transactedAmount' => $this->transactedAmount, 'contract' => $this->contract, 'statementDescriptor' => $this->statementDescriptor, 'result' => $this->result, 'verifyRequest' => $this->verifyRequest, 'failureType' => $this->failureType, 'arn' => $this->arn, 'verified' => $this->verified, 'liability' => $this->liability, 'attemptDetail' => $this->attemptDetail, 'fraudResults' => $this->fraudResults, 'response' => $this->response, 'sourceTransactionId' => $this->sourceTransactionId, 'paymentMethodId' => $this->paymentMethodId, 'transactionSubType' => $this->transactionSubType, 'ancillaryTransactions' => $this->ancillaryTransactions, 'requestedConnectorId' => $this->requestedConnectorId, 'requestedConnectorLibrary' => $this->requestedConnectorLibrary, 'transactionTime' => $this->transactionTime, 'paymentProvider' => $this->paymentProvider, 'paymentInputType' => $this->paymentInputType, 'authCode' => $this->authCode, 'paymentMethodIssuer' => $this->paymentMethodIssuer];
    }
}