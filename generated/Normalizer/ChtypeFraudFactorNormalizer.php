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
class ChtypeFraudFactorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeFraudFactor';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeFraudFactor';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeFraudFactor();
        if (property_exists($data, 'on')) {
            $object->setOn($data->{'on'});
        }
        if (property_exists($data, 'factor')) {
            $object->setFactor($data->{'factor'});
        }
        if (property_exists($data, 'other_on')) {
            $object->setOtherOn($data->{'other_on'});
        }
        if (property_exists($data, 'other_factor')) {
            $object->setOtherFactor($data->{'other_factor'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getOn()) {
            $data->{'on'} = $object->getOn();
        }
        if (null !== $object->getFactor()) {
            $data->{'factor'} = $object->getFactor();
        }
        if (null !== $object->getOtherOn()) {
            $data->{'other_on'} = $object->getOtherOn();
        }
        if (null !== $object->getOtherFactor()) {
            $data->{'other_factor'} = $object->getOtherFactor();
        }
        return $data;
    }
}