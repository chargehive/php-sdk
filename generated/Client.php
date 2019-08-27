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
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveStringTransport $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveStringTransport|\Psr\Http\Message\ResponseInterface
     */
    public function ping(\ChargeHive\Php\Sdk\Generated\Model\ChargehiveStringTransport $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \ChargeHive\Php\Sdk\Generated\Endpoint\Ping($body), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://a13efb2e.ngrok.io');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\ChargeHive\Php\Sdk\Generated\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}