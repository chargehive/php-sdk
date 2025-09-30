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
class ChargehiveMethodVerifyResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveMethodVerifyResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveMethodVerifyResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveMethodVerifyResponse();
        if (property_exists($data, 'verified')) {
            $object->setVerified($data->{'verified'});
        }
        if (property_exists($data, 'authed')) {
            $object->setAuthed($data->{'authed'});
        }
        if (property_exists($data, 'info')) {
            $object->setInfo($this->denormalizer->denormalize($data->{'info'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethodInfo', 'json', $context));
        }
        if (property_exists($data, 'transaction')) {
            $object->setTransaction($this->denormalizer->denormalize($data->{'transaction'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeTransaction', 'json', $context));
        }
        if (property_exists($data, 'tokenize_response')) {
            $object->setTokenizeResponse($this->denormalizer->denormalize($data->{'tokenize_response'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehivePCIBTokenizeResponse', 'json', $context));
        }
        if (property_exists($data, 'token_expiry')) {
            $object->setTokenExpiry($data->{'token_expiry'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getVerified()) {
            $data->{'verified'} = $object->getVerified();
        }
        if (null !== $object->getAuthed()) {
            $data->{'authed'} = $object->getAuthed();
        }
        if (null !== $object->getInfo()) {
            $data->{'info'} = $this->normalizer->normalize($object->getInfo(), 'json', $context);
        }
        if (null !== $object->getTransaction()) {
            $data->{'transaction'} = $this->normalizer->normalize($object->getTransaction(), 'json', $context);
        }
        if (null !== $object->getTokenizeResponse()) {
            $data->{'tokenize_response'} = $this->normalizer->normalize($object->getTokenizeResponse(), 'json', $context);
        }
        if (null !== $object->getTokenExpiry()) {
            $data->{'token_expiry'} = $object->getTokenExpiry();
        }
        return $data;
    }
}