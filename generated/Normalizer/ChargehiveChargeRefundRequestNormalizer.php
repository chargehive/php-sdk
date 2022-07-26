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
class ChargehiveChargeRefundRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeRefundRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeRefundRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeRefundRequest();
        if (property_exists($data, 'charge_id')) {
            $object->setChargeId($data->{'charge_id'});
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($this->denormalizer->denormalize($data->{'amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'reason')) {
            $object->setReason($this->denormalizer->denormalize($data->{'reason'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeReason', 'json', $context));
        }
        if (property_exists($data, 'transactions')) {
            $values = array();
            foreach ($data->{'transactions'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeRefundTransaction', 'json', $context);
            }
            $object->setTransactions($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChargeId()) {
            $data->{'charge_id'} = $object->getChargeId();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $this->normalizer->normalize($object->getAmount(), 'json', $context);
        }
        if (null !== $object->getReason()) {
            $data->{'reason'} = $this->normalizer->normalize($object->getReason(), 'json', $context);
        }
        if (null !== $object->getTransactions()) {
            $values = array();
            foreach ($object->getTransactions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'transactions'} = $values;
        }
        return $data;
    }
}