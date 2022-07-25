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
class ChargehiveMethodTokenizeRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveMethodTokenizeRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveMethodTokenizeRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodTokenizeRequest();
        if (property_exists($data, 'data_location')) {
            $object->setDataLocation($data->{'data_location'});
        }
        if (property_exists($data, 'method')) {
            $object->setMethod($this->denormalizer->denormalize($data->{'method'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethod', 'json', $context));
        }
        if (property_exists($data, 'display_name')) {
            $object->setDisplayName($data->{'display_name'});
        }
        if (property_exists($data, 'payment_method_verification')) {
            $values = array();
            foreach ($data->{'payment_method_verification'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethodVerificationItem', 'json', $context);
            }
            $object->setPaymentMethodVerification($values);
        }
        if (property_exists($data, 'references')) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'references'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setReferences($values_1);
        }
        if (property_exists($data, 'labels')) {
            $values_2 = array();
            foreach ($data->{'labels'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehivechtypeLabel', 'json', $context);
            }
            $object->setLabels($values_2);
        }
        if (property_exists($data, 'verify_charge_id')) {
            $object->setVerifyChargeId($data->{'verify_charge_id'});
        }
        if (property_exists($data, 'additional_data')) {
            $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'additional_data'} as $key_1 => $value_3) {
                $values_3[$key_1] = $value_3;
            }
            $object->setAdditionalData($values_3);
        }
        if (property_exists($data, 'charge_meta')) {
            $object->setChargeMeta($this->denormalizer->denormalize($data->{'charge_meta'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeChargeMeta', 'json', $context));
        }
        if (property_exists($data, 'billing_profile_id')) {
            $object->setBillingProfileId($data->{'billing_profile_id'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getDataLocation()) {
            $data->{'data_location'} = $object->getDataLocation();
        }
        if (null !== $object->getMethod()) {
            $data->{'method'} = $this->normalizer->normalize($object->getMethod(), 'json', $context);
        }
        if (null !== $object->getDisplayName()) {
            $data->{'display_name'} = $object->getDisplayName();
        }
        if (null !== $object->getPaymentMethodVerification()) {
            $values = array();
            foreach ($object->getPaymentMethodVerification() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'payment_method_verification'} = $values;
        }
        if (null !== $object->getReferences()) {
            $values_1 = new \stdClass();
            foreach ($object->getReferences() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'references'} = $values_1;
        }
        if (null !== $object->getLabels()) {
            $values_2 = array();
            foreach ($object->getLabels() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'labels'} = $values_2;
        }
        if (null !== $object->getVerifyChargeId()) {
            $data->{'verify_charge_id'} = $object->getVerifyChargeId();
        }
        if (null !== $object->getAdditionalData()) {
            $values_3 = new \stdClass();
            foreach ($object->getAdditionalData() as $key_1 => $value_3) {
                $values_3->{$key_1} = $value_3;
            }
            $data->{'additional_data'} = $values_3;
        }
        if (null !== $object->getChargeMeta()) {
            $data->{'charge_meta'} = $this->normalizer->normalize($object->getChargeMeta(), 'json', $context);
        }
        if (null !== $object->getBillingProfileId()) {
            $data->{'billing_profile_id'} = $object->getBillingProfileId();
        }
        return $data;
    }
}