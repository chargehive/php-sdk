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
class ChargehiveMethodRepairRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveMethodRepairRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveMethodRepairRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodRepairRequest();
        if (property_exists($data, 'payment_method_id')) {
            $object->setPaymentMethodId($data->{'payment_method_id'});
        }
        if (property_exists($data, 'bpid')) {
            $object->setBpid($data->{'bpid'});
        }
        if (property_exists($data, 'mfp')) {
            $object->setMfp($data->{'mfp'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'pfp')) {
            $object->setPfp($data->{'pfp'});
        }
        if (property_exists($data, 'payment_scheme')) {
            $object->setPaymentScheme($data->{'payment_scheme'});
        }
        if (property_exists($data, 'token_id')) {
            $object->setTokenId($data->{'token_id'});
        }
        if (property_exists($data, 'token_type')) {
            $object->setTokenType($data->{'token_type'});
        }
        if (property_exists($data, 'token_expiry')) {
            $object->setTokenExpiry($data->{'token_expiry'});
        }
        if (property_exists($data, 'previous_method_id')) {
            $object->setPreviousMethodId($data->{'previous_method_id'});
        }
        if (property_exists($data, 'refresh_reason')) {
            $object->setRefreshReason($data->{'refresh_reason'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPaymentMethodId()) {
            $data->{'payment_method_id'} = $object->getPaymentMethodId();
        }
        if (null !== $object->getBpid()) {
            $data->{'bpid'} = $object->getBpid();
        }
        if (null !== $object->getMfp()) {
            $data->{'mfp'} = $object->getMfp();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPfp()) {
            $data->{'pfp'} = $object->getPfp();
        }
        if (null !== $object->getPaymentScheme()) {
            $data->{'payment_scheme'} = $object->getPaymentScheme();
        }
        if (null !== $object->getTokenId()) {
            $data->{'token_id'} = $object->getTokenId();
        }
        if (null !== $object->getTokenType()) {
            $data->{'token_type'} = $object->getTokenType();
        }
        if (null !== $object->getTokenExpiry()) {
            $data->{'token_expiry'} = $object->getTokenExpiry();
        }
        if (null !== $object->getPreviousMethodId()) {
            $data->{'previous_method_id'} = $object->getPreviousMethodId();
        }
        if (null !== $object->getRefreshReason()) {
            $data->{'refresh_reason'} = $object->getRefreshReason();
        }
        return $data;
    }
}