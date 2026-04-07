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
class ChargehiveChargeAuthorizeRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeAuthorizeRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeAuthorizeRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeAuthorizeRequest();
        if (property_exists($data, 'charge_id')) {
            $object->setChargeId($data->{'charge_id'});
        }
        if (property_exists($data, 'payment_method_verification')) {
            $values = array();
            foreach ($data->{'payment_method_verification'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethodVerificationItem', 'json', $context);
            }
            $object->setPaymentMethodVerification($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChargeId()) {
            $data->{'charge_id'} = $object->getChargeId();
        }
        if (null !== $object->getPaymentMethodVerification()) {
            $values = array();
            foreach ($object->getPaymentMethodVerification() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'payment_method_verification'} = $values;
        }
        return $data;
    }
}