<?php

namespace ChargeHive\Php\Sdk\Generated\Endpoint;

class ChargeFraudScan extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $charge_id;
    /**
     * 
     *
     * @param string $chargeId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeFraudScanRequest $body 
     */
    public function __construct(string $chargeId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeFraudScanRequest $body)
    {
        $this->charge_id = $chargeId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{charge_id}'), array($this->charge_id), '/v1/charge/{charge_id}/fraudscan');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeFraudScanResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeFraudScanResponse', 'json');
        }
        return $serializer->deserialize($body, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\RuntimeError', 'json');
    }
}