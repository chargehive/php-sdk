<?php

namespace ChargeHive\Php\Sdk\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ChargehiveTransportKeyRetrieveResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveTransportKeyRetrieveResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveTransportKeyRetrieveResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveTransportKeyRetrieveResponse();
        if (property_exists($data, 'success')) {
            $object->setSuccess($data->{'success'});
        }
        if (property_exists($data, 'transport_key_id')) {
            $object->setTransportKeyId($data->{'transport_key_id'});
        }
        if (property_exists($data, 'public_key')) {
            $object->setPublicKey($data->{'public_key'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSuccess()) {
            $data->{'success'} = $object->getSuccess();
        }
        if (null !== $object->getTransportKeyId()) {
            $data->{'transport_key_id'} = $object->getTransportKeyId();
        }
        if (null !== $object->getPublicKey()) {
            $data->{'public_key'} = $object->getPublicKey();
        }
        return $data;
    }
}