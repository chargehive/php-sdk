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
class ChtypeInitialTransactionDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeInitialTransactionData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeInitialTransactionData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeInitialTransactionData();
        if (property_exists($data, 'charge_id')) {
            $object->setChargeId($data->{'charge_id'});
        }
        if (property_exists($data, 'transaction_id')) {
            $object->setTransactionId($data->{'transaction_id'});
        }
        if (property_exists($data, 'connector_id')) {
            $object->setConnectorId($data->{'connector_id'});
        }
        if (property_exists($data, 'network_id')) {
            $object->setNetworkId($data->{'network_id'});
        }
        if (property_exists($data, 'transaction_type')) {
            $object->setTransactionType($data->{'transaction_type'});
        }
        if (property_exists($data, 'transaction_time')) {
            $object->setTransactionTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'transaction_time'}));
        }
        if (property_exists($data, 'method_id')) {
            $object->setMethodId($data->{'method_id'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChargeId()) {
            $data->{'charge_id'} = $object->getChargeId();
        }
        if (null !== $object->getTransactionId()) {
            $data->{'transaction_id'} = $object->getTransactionId();
        }
        if (null !== $object->getConnectorId()) {
            $data->{'connector_id'} = $object->getConnectorId();
        }
        if (null !== $object->getNetworkId()) {
            $data->{'network_id'} = $object->getNetworkId();
        }
        if (null !== $object->getTransactionType()) {
            $data->{'transaction_type'} = $object->getTransactionType();
        }
        if (null !== $object->getTransactionTime()) {
            $data->{'transaction_time'} = $object->getTransactionTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getMethodId()) {
            $data->{'method_id'} = $object->getMethodId();
        }
        return $data;
    }
}