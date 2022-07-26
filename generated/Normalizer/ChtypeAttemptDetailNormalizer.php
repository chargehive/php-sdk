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
class ChtypeAttemptDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAttemptDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAttemptDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeAttemptDetail();
        if (property_exists($data, 'ChargeTransactionNumber')) {
            $object->setChargeTransactionNumber($data->{'ChargeTransactionNumber'});
        }
        if (property_exists($data, 'ChargeAttemptNumber')) {
            $object->setChargeAttemptNumber($data->{'ChargeAttemptNumber'});
        }
        if (property_exists($data, 'AttemptTransactionNumber')) {
            $object->setAttemptTransactionNumber($data->{'AttemptTransactionNumber'});
        }
        if (property_exists($data, 'AttemptMethodCascade')) {
            $object->setAttemptMethodCascade($data->{'AttemptMethodCascade'});
        }
        if (property_exists($data, 'AttemptConnectorCascade')) {
            $object->setAttemptConnectorCascade($data->{'AttemptConnectorCascade'});
        }
        if (property_exists($data, 'IsPrimaryMethod')) {
            $object->setIsPrimaryMethod($data->{'IsPrimaryMethod'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChargeTransactionNumber()) {
            $data->{'ChargeTransactionNumber'} = $object->getChargeTransactionNumber();
        }
        if (null !== $object->getChargeAttemptNumber()) {
            $data->{'ChargeAttemptNumber'} = $object->getChargeAttemptNumber();
        }
        if (null !== $object->getAttemptTransactionNumber()) {
            $data->{'AttemptTransactionNumber'} = $object->getAttemptTransactionNumber();
        }
        if (null !== $object->getAttemptMethodCascade()) {
            $data->{'AttemptMethodCascade'} = $object->getAttemptMethodCascade();
        }
        if (null !== $object->getAttemptConnectorCascade()) {
            $data->{'AttemptConnectorCascade'} = $object->getAttemptConnectorCascade();
        }
        if (null !== $object->getIsPrimaryMethod()) {
            $data->{'IsPrimaryMethod'} = $object->getIsPrimaryMethod();
        }
        return $data;
    }
}