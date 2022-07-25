<?php

namespace ChargeHive\Php\Sdk\Generated\Endpoint;

class MethodUnlock extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $method_id;
    /**
     * 
     *
     * @param string $methodId 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUnlockRequest $body 
     */
    public function __construct(string $methodId, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUnlockRequest $body)
    {
        $this->method_id = $methodId;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{method_id}'), array($this->method_id), '/v1/method/unlock/{method_id}');
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodUnlockResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveMethodUnlockResponse', 'json');
        }
        return $serializer->deserialize($body, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\RuntimeError', 'json');
    }
}