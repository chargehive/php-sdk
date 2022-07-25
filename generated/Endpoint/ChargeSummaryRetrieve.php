<?php

namespace ChargeHive\Php\Sdk\Generated\Endpoint;

class ChargeSummaryRetrieve extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $charge_id;
    /**
     * 
     *
     * @param string $chargeId 
     */
    public function __construct(string $chargeId)
    {
        $this->charge_id = $chargeId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{charge_id}'), array($this->charge_id), '/v1/charge/{charge_id}/summary');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeSummaryRetrieveResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeSummaryRetrieveResponse', 'json');
        }
        return $serializer->deserialize($body, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\RuntimeError', 'json');
    }
}