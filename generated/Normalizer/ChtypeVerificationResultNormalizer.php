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
class ChtypeVerificationResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeVerificationResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeVerificationResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeVerificationResult();
        if (property_exists($data, 'address_verification_result')) {
            $object->setAddressVerificationResult($data->{'address_verification_result'});
        }
        if (property_exists($data, 'cvv_verification_result')) {
            $object->setCvvVerificationResult($data->{'cvv_verification_result'});
        }
        if (property_exists($data, 'fraud_result')) {
            $object->setFraudResult($data->{'fraud_result'});
        }
        if (property_exists($data, 'threeds_result')) {
            $object->setThreedsResult($this->denormalizer->denormalize($data->{'threeds_result'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeThreeDSResult', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAddressVerificationResult()) {
            $data->{'address_verification_result'} = $object->getAddressVerificationResult();
        }
        if (null !== $object->getCvvVerificationResult()) {
            $data->{'cvv_verification_result'} = $object->getCvvVerificationResult();
        }
        if (null !== $object->getFraudResult()) {
            $data->{'fraud_result'} = $object->getFraudResult();
        }
        if (null !== $object->getThreedsResult()) {
            $data->{'threeds_result'} = $this->normalizer->normalize($object->getThreedsResult(), 'json', $context);
        }
        return $data;
    }
}