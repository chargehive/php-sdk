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
class ChtypePaymentMethodInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethodInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethodInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypePaymentMethodInfo();
        if (property_exists($data, 'token_id')) {
            $object->setTokenId($data->{'token_id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'payment_scheme')) {
            $object->setPaymentScheme($data->{'payment_scheme'});
        }
        if (property_exists($data, 'valid_from')) {
            $object->setValidFrom(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'valid_from'}));
        }
        if (property_exists($data, 'expiry')) {
            $object->setExpiry(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expiry'}));
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'info')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'info'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setInfo($values);
        }
        if (property_exists($data, 'provider')) {
            $object->setProvider($data->{'provider'});
        }
        if (property_exists($data, 'inputType')) {
            $object->setInputType($data->{'inputType'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTokenId()) {
            $data->{'token_id'} = $object->getTokenId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPaymentScheme()) {
            $data->{'payment_scheme'} = $object->getPaymentScheme();
        }
        if (null !== $object->getValidFrom()) {
            $data->{'valid_from'} = $object->getValidFrom()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getExpiry()) {
            $data->{'expiry'} = $object->getExpiry()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getInfo()) {
            $values = new \stdClass();
            foreach ($object->getInfo() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'info'} = $values;
        }
        if (null !== $object->getProvider()) {
            $data->{'provider'} = $object->getProvider();
        }
        if (null !== $object->getInputType()) {
            $data->{'inputType'} = $object->getInputType();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        return $data;
    }
}