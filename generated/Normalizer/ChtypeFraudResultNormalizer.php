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
class ChtypeFraudResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeFraudResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeFraudResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeFraudResult();
        if (property_exists($data, 'fraud_check_id')) {
            $object->setFraudCheckId($data->{'fraud_check_id'});
        }
        if (property_exists($data, 'overall_score')) {
            $object->setOverallScore($this->denormalizer->denormalize($data->{'overall_score'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeFraudScore', 'json', $context));
        }
        if (property_exists($data, 'sub_scores')) {
            $values = array();
            foreach ($data->{'sub_scores'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeFraudScore', 'json', $context);
            }
            $object->setSubScores($values);
        }
        if (property_exists($data, 'suggested_action')) {
            $object->setSuggestedAction($data->{'suggested_action'});
        }
        if (property_exists($data, 'scan_time')) {
            $object->setScanTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'scan_time'}));
        }
        if (property_exists($data, 'connector_library')) {
            $object->setConnectorLibrary($data->{'connector_library'});
        }
        if (property_exists($data, 'additional_data')) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'additional_data'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setAdditionalData($values_1);
        }
        if (property_exists($data, 'info_links')) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'info_links'} as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $object->setInfoLinks($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFraudCheckId()) {
            $data->{'fraud_check_id'} = $object->getFraudCheckId();
        }
        if (null !== $object->getOverallScore()) {
            $data->{'overall_score'} = $this->normalizer->normalize($object->getOverallScore(), 'json', $context);
        }
        if (null !== $object->getSubScores()) {
            $values = array();
            foreach ($object->getSubScores() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'sub_scores'} = $values;
        }
        if (null !== $object->getSuggestedAction()) {
            $data->{'suggested_action'} = $object->getSuggestedAction();
        }
        if (null !== $object->getScanTime()) {
            $data->{'scan_time'} = $object->getScanTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getConnectorLibrary()) {
            $data->{'connector_library'} = $object->getConnectorLibrary();
        }
        if (null !== $object->getAdditionalData()) {
            $values_1 = new \stdClass();
            foreach ($object->getAdditionalData() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'additional_data'} = $values_1;
        }
        if (null !== $object->getInfoLinks()) {
            $values_2 = new \stdClass();
            foreach ($object->getInfoLinks() as $key_1 => $value_2) {
                $values_2->{$key_1} = $value_2;
            }
            $data->{'info_links'} = $values_2;
        }
        return $data;
    }
}