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
class ChtypeFraudScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeFraudScore';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeFraudScore';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeFraudScore();
        if (property_exists($data, 'score')) {
            $object->setScore($data->{'score'});
        }
        if (property_exists($data, 'risk_level')) {
            $object->setRiskLevel($data->{'risk_level'});
        }
        if (property_exists($data, 'factor')) {
            $object->setFactor($this->denormalizer->denormalize($data->{'factor'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeFraudFactor', 'json', $context));
        }
        if (property_exists($data, 'summary')) {
            $object->setSummary($data->{'summary'});
        }
        if (property_exists($data, 'data')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'data'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setData($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getScore()) {
            $data->{'score'} = $object->getScore();
        }
        if (null !== $object->getRiskLevel()) {
            $data->{'risk_level'} = $object->getRiskLevel();
        }
        if (null !== $object->getFactor()) {
            $data->{'factor'} = $this->normalizer->normalize($object->getFactor(), 'json', $context);
        }
        if (null !== $object->getSummary()) {
            $data->{'summary'} = $object->getSummary();
        }
        if (null !== $object->getData()) {
            $values = new \stdClass();
            foreach ($object->getData() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'data'} = $values;
        }
        return $data;
    }
}