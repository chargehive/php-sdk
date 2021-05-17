<?php

namespace ChargeHive\Php\Sdk\Generated;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * 
     *
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCreateRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCreateResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function chargeCreate(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCreateRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ChargeCreate($body), $fetch);
    }
    /**
     * 
     *
     * @param string $chargeId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeAuthorizeRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeAuthorizeResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function chargeAuthorize(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeAuthorizeRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ChargeAuthorize($chargeId, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $chargeId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCancelRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCancelResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function chargeCancel(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCancelRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ChargeCancel($chargeId, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $chargeId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCaptureRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCaptureResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function chargeCapture(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCaptureRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ChargeCapture($chargeId, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $chargeId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeFraudScanRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeFraudScanResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function chargeFraudScan(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeFraudScanRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ChargeFraudScan($chargeId, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $chargeId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeModifyRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeModifyResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function chargeModify(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeModifyRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ChargeModify($chargeId, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $chargeId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeRefundRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeRefundResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function chargeRefund(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeRefundRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ChargeRefund($chargeId, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $chargeId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeResumeRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeResumeResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function chargeResume(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeResumeRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ChargeResume($chargeId, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $chargeId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeSuspendRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeSuspendResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function chargeSuspend(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeSuspendRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ChargeSuspend($chargeId, $body), $fetch);
    }
    /**
     * 
     *
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationApplyRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationApplyResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function configurationApply(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationApplyRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ConfigurationApply($body), $fetch);
    }
    /**
     * 
     *
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationGetRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationGetResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function configurationGet(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationGetRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ConfigurationGet($body), $fetch);
    }
    /**
     * 
     *
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationListRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationListResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function configurationList(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationListRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ConfigurationList($body), $fetch);
    }
    /**
     * 
     *
     * @param string $kind 
     * @param string $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationDeleteResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function configurationDelete(string $kind, string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ConfigurationDelete($kind, $id), $fetch);
    }
    /**
     * 
     *
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveConnectionValidateRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConnectionValidateResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function connectionValidate(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConnectionValidateRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ConnectionValidate($body), $fetch);
    }
    /**
     * 
     *
     * @param string $requestId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveConnectionConfirmRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConnectionValidateResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function connectionValidationConfirm(string $requestId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveConnectionConfirmRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ConnectionValidationConfirm($requestId, $body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveSupportedMethodUpdateTypes|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function methodAvailableUpdateSchemas(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\MethodAvailableUpdateSchemas(), $fetch);
    }
    /**
     * 
     *
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodTokenizeRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodTokenizeResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function methodTokenize(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodTokenizeRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\MethodTokenize($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveTransportKeyRetrieveResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function transportKeyRetrieve(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\TransportKeyRetrieve(), $fetch);
    }
    /**
     * 
     *
     * @param string $token 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUnlockRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUnlockResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function methodUnlock(string $token, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUnlockRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\MethodUnlock($token, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $token 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUpdateRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUpdateResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function methodUpdate(string $token, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUpdateRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\MethodUpdate($token, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $token 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodRefreshRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodRefreshResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function methodRefresh(string $token, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodRefreshRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\MethodRefresh($token, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $token 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodVerifyRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodVerifyResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function methodVerify(string $token, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodVerifyRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\MethodVerify($token, $body), $fetch);
    }
    /**
     * 
     *
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveStringTransport $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveStringTransport|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function ping(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveStringTransport $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\Ping($body), $fetch);
    }
    /**
     * 
     *
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveSchedulerOnDemandRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveSchedulerOnDemandResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function schedulerOnDemand(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveSchedulerOnDemandRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\SchedulerOnDemand($body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveSchedulerTriggerResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError|\Psr\Http\Message\ResponseInterface
     */
    public function schedulerTrigger(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\SchedulerTrigger(), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://api.chargehive.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\ChargeHive\Php\Sdk\Generated\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}