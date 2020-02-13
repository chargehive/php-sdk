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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCreateResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeAuthorizeResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCancelResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCaptureResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeFraudScanResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeModifyResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeRefundResponse|\Psr\Http\Message\ResponseInterface
     */
    public function chargeRefund(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeRefundRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ChargeRefund($chargeId, $body), $fetch);
    }
    /**
     * 
     *
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationApplyRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationApplyResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationGetResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationListResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConfigurationDeleteResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConnectionValidateResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveConnectionValidateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function connectionValidationConfirm(string $requestId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveConnectionConfirmRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\ConnectionValidationConfirm($requestId, $body), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveSupportedMethodUpdateTypes|\Psr\Http\Message\ResponseInterface
     */
    public function methodAvailableUpdateSchemas(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\MethodAvailableUpdateSchemas(), $fetch);
    }
    /**
     * 
     *
     * @param string $token 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUnlockRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUnlockResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUpdateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function methodUpdate(string $token, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUpdateRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\MethodUpdate($token, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $token 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodVerifyRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodVerifyResponse|\Psr\Http\Message\ResponseInterface
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveStringTransport|\Psr\Http\Message\ResponseInterface
     */
    public function ping(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveStringTransport $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\Ping($body), $fetch);
    }
    /**
     * 
     *
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveSchedulerOnDemandTriggerRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveSchedulerOnDemandTriggerResponse|\Psr\Http\Message\ResponseInterface
     */
    public function schedulerOnDemandTrigger(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveSchedulerOnDemandTriggerRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\SchedulerOnDemandTrigger($body), $fetch);
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