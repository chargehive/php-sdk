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
class ChargehiveChargeSummaryRetrieveResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeSummaryRetrieveResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeSummaryRetrieveResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeSummaryRetrieveResponse();
        if (property_exists($data, 'chargeSummary')) {
            $object->setChargeSummary($this->denormalizer->denormalize($data->{'chargeSummary'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeChargeSummary', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChargeSummary()) {
            $data->{'chargeSummary'} = $this->normalizer->normalize($object->getChargeSummary(), 'json', $context);
        }
        return $data;
    }
}