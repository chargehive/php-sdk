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
class ChtypeResponseDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeResponseDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeResponseDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeResponseDetail();
        if (property_exists($data, 'response_code')) {
            $object->setResponseCode($data->{'response_code'});
        }
        if (property_exists($data, 'consumer_message')) {
            $object->setConsumerMessage($data->{'consumer_message'});
        }
        if (property_exists($data, 'merchant_message')) {
            $object->setMerchantMessage($data->{'merchant_message'});
        }
        if (property_exists($data, 'failure_type')) {
            $object->setFailureType($data->{'failure_type'});
        }
        if (property_exists($data, 'category')) {
            $object->setCategory($data->{'category'});
        }
        if (property_exists($data, 'error_type')) {
            $object->setErrorType($data->{'error_type'});
        }
        if (property_exists($data, 'error_properties')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'error_properties'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setErrorProperties($values);
        }
        if (property_exists($data, 'originating_code')) {
            $object->setOriginatingCode($data->{'originating_code'});
        }
        if (property_exists($data, 'specific_errors')) {
            $values_1 = array();
            foreach ($data->{'specific_errors'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeResponseDetail', 'json', $context);
            }
            $object->setSpecificErrors($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getResponseCode()) {
            $data->{'response_code'} = $object->getResponseCode();
        }
        if (null !== $object->getConsumerMessage()) {
            $data->{'consumer_message'} = $object->getConsumerMessage();
        }
        if (null !== $object->getMerchantMessage()) {
            $data->{'merchant_message'} = $object->getMerchantMessage();
        }
        if (null !== $object->getFailureType()) {
            $data->{'failure_type'} = $object->getFailureType();
        }
        if (null !== $object->getCategory()) {
            $data->{'category'} = $object->getCategory();
        }
        if (null !== $object->getErrorType()) {
            $data->{'error_type'} = $object->getErrorType();
        }
        if (null !== $object->getErrorProperties()) {
            $values = new \stdClass();
            foreach ($object->getErrorProperties() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'error_properties'} = $values;
        }
        if (null !== $object->getOriginatingCode()) {
            $data->{'originating_code'} = $object->getOriginatingCode();
        }
        if (null !== $object->getSpecificErrors()) {
            $values_1 = array();
            foreach ($object->getSpecificErrors() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'specific_errors'} = $values_1;
        }
        return $data;
    }
}