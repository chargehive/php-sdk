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
class ChargehiveMethodTokenizeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveMethodTokenizeResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveMethodTokenizeResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodTokenizeResponse();
        if (property_exists($data, 'success')) {
            $object->setSuccess($data->{'success'});
        }
        if (property_exists($data, 'token')) {
            $object->setToken($data->{'token'});
        }
        if (property_exists($data, 'info')) {
            $object->setInfo($this->denormalizer->denormalize($data->{'info'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethodInfo', 'json', $context));
        }
        if (property_exists($data, 'additional_data')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'additional_data'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setAdditionalData($values);
        }
        if (property_exists($data, 'customer_message')) {
            $object->setCustomerMessage($data->{'customer_message'});
        }
        if (property_exists($data, 'merchant_message')) {
            $object->setMerchantMessage($data->{'merchant_message'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSuccess()) {
            $data->{'success'} = $object->getSuccess();
        }
        if (null !== $object->getToken()) {
            $data->{'token'} = $object->getToken();
        }
        if (null !== $object->getInfo()) {
            $data->{'info'} = $this->normalizer->normalize($object->getInfo(), 'json', $context);
        }
        if (null !== $object->getAdditionalData()) {
            $values = new \stdClass();
            foreach ($object->getAdditionalData() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'additional_data'} = $values;
        }
        if (null !== $object->getCustomerMessage()) {
            $data->{'customer_message'} = $object->getCustomerMessage();
        }
        if (null !== $object->getMerchantMessage()) {
            $data->{'merchant_message'} = $object->getMerchantMessage();
        }
        return $data;
    }
}