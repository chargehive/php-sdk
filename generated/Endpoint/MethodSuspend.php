<?php

namespace ChargeHive\Php\Sdk\Generated\Endpoint;

class MethodSuspend extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $token;
    /**
     * 
     *
     * @param string $token 
     * @param \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodSuspendRequest $body 
     */
    public function __construct(string $token, \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodSuspendRequest $body)
    {
        $this->token = $token;
        $this->body = $body;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{token}'), array($this->token), '/v1/method/{token}/suspend');
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
     * @return null|\ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodSuspendResponse|\ChargeHive\Php\Sdk\Generated\Model\RuntimeError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveMethodSuspendResponse', 'json');
        }
        return $serializer->deserialize($body, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\RuntimeError', 'json');
    }
}