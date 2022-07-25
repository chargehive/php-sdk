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
class ChtypePaymentMethodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethod';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethod';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypePaymentMethod();
        if (property_exists($data, 'schema')) {
            $object->setSchema($data->{'schema'});
        }
        if (property_exists($data, 'json')) {
            $object->setJson($data->{'json'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'provider')) {
            $object->setProvider($data->{'provider'});
        }
        if (property_exists($data, 'inputType')) {
            $object->setInputType($data->{'inputType'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSchema()) {
            $data->{'schema'} = $object->getSchema();
        }
        if (null !== $object->getJson()) {
            $data->{'json'} = $object->getJson();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getProvider()) {
            $data->{'provider'} = $object->getProvider();
        }
        if (null !== $object->getInputType()) {
            $data->{'inputType'} = $object->getInputType();
        }
        return $data;
    }
}