<?php

namespace ChargeHive\Php\Sdk\Generated\Endpoint;

class ChargeCapture extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $charge_id;
    /**
     * 
     *
     * @param string $chargeId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCaptureRequest $body 
     */
    public function __construct(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCaptureRequest $body)
    {
        $this->chargeId = $chargeId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{charge_id}'), array($this->charge_id), '/v1/charge/{charge_id}/capture');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeCaptureResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeCaptureResponse', 'json');
        }
    }
}