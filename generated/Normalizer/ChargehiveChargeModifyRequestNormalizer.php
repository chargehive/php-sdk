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
class ChargehiveChargeModifyRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeModifyRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeModifyRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeModifyRequest();
        if (property_exists($data, 'charge_id')) {
            $object->setChargeId($data->{'charge_id'});
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($this->denormalizer->denormalize($data->{'amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'PaymentMethodIds')) {
            $values = array();
            foreach ($data->{'PaymentMethodIds'} as $value) {
                $values[] = $value;
            }
            $object->setPaymentMethodIds($values);
        }
        if (property_exists($data, 'expiry_time')) {
            $object->setExpiryTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expiry_time'}));
        }
        if (property_exists($data, 'charge_meta')) {
            $object->setChargeMeta($this->denormalizer->denormalize($data->{'charge_meta'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeChargeMeta', 'json', $context));
        }
        if (property_exists($data, 'charge_meta_type')) {
            $object->setChargeMetaType($data->{'charge_meta_type'});
        }
        if (property_exists($data, 'labels')) {
            $values_1 = array();
            foreach ($data->{'labels'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehivechtypeLabel', 'json', $context);
            }
            $object->setLabels($values_1);
        }
        if (property_exists($data, 'billing_profile_id')) {
            $object->setBillingProfileId($data->{'billing_profile_id'});
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
        if (null !== $object->getPaymentMethodIds()) {
            $values = array();
            foreach ($object->getPaymentMethodIds() as $value) {
                $values[] = $value;
            }
            $data->{'PaymentMethodIds'} = $values;
        }
        if (null !== $object->getExpiryTime()) {
            $data->{'expiry_time'} = $object->getExpiryTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getChargeMeta()) {
            $data->{'charge_meta'} = $this->normalizer->normalize($object->getChargeMeta(), 'json', $context);
        }
        if (null !== $object->getChargeMetaType()) {
            $data->{'charge_meta_type'} = $object->getChargeMetaType();
        }
        if (null !== $object->getLabels()) {
            $values_1 = array();
            foreach ($object->getLabels() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'labels'} = $values_1;
        }
        if (null !== $object->getBillingProfileId()) {
            $data->{'billing_profile_id'} = $object->getBillingProfileId();
        }
        return $data;
    }
}