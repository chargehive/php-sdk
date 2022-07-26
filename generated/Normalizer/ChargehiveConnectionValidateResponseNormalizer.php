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
class ChargehiveConnectionValidateResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveConnectionValidateResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveConnectionValidateResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveConnectionValidateResponse();
        if (property_exists($data, 'request_id')) {
            $object->setRequestId($data->{'request_id'});
        }
        if (property_exists($data, 'verification_key')) {
            $object->setVerificationKey($data->{'verification_key'});
        }
        if (property_exists($data, 'response')) {
            $object->setResponse($this->denormalizer->denormalize($data->{'response'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeResponseDetail', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getRequestId()) {
            $data->{'request_id'} = $object->getRequestId();
        }
        if (null !== $object->getVerificationKey()) {
            $data->{'verification_key'} = $object->getVerificationKey();
        }
        if (null !== $object->getResponse()) {
            $data->{'response'} = $this->normalizer->normalize($object->getResponse(), 'json', $context);
        }
        return $data;
    }
}