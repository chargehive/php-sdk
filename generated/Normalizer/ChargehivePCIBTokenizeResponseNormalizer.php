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
class ChargehivePCIBTokenizeResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehivePCIBTokenizeResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehivePCIBTokenizeResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehivePCIBTokenizeResponse();
        if (property_exists($data, 'tokenID')) {
            $object->setTokenID($data->{'tokenID'});
        }
        if (property_exists($data, 'token')) {
            $object->setToken($data->{'token'});
        }
        if (property_exists($data, 'profileFingerprint')) {
            $object->setProfileFingerprint($data->{'profileFingerprint'});
        }
        if (property_exists($data, 'merchantFingerprint')) {
            $object->setMerchantFingerprint($data->{'merchantFingerprint'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTokenID()) {
            $data->{'tokenID'} = $object->getTokenID();
        }
        if (null !== $object->getToken()) {
            $data->{'token'} = $object->getToken();
        }
        if (null !== $object->getProfileFingerprint()) {
            $data->{'profileFingerprint'} = $object->getProfileFingerprint();
        }
        if (null !== $object->getMerchantFingerprint()) {
            $data->{'merchantFingerprint'} = $object->getMerchantFingerprint();
        }
        return $data;
    }
}