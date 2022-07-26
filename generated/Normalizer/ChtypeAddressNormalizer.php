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
class ChtypeAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAddress';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAddress';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeAddress();
        if (property_exists($data, 'line_one')) {
            $object->setLineOne($data->{'line_one'});
        }
        if (property_exists($data, 'line_two')) {
            $object->setLineTwo($data->{'line_two'});
        }
        if (property_exists($data, 'line_three')) {
            $object->setLineThree($data->{'line_three'});
        }
        if (property_exists($data, 'town')) {
            $object->setTown($data->{'town'});
        }
        if (property_exists($data, 'county')) {
            $object->setCounty($data->{'county'});
        }
        if (property_exists($data, 'country')) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'postal_code')) {
            $object->setPostalCode($data->{'postal_code'});
        }
        if (property_exists($data, 'fao')) {
            $object->setFao($data->{'fao'});
        }
        if (property_exists($data, 'company_name')) {
            $object->setCompanyName($data->{'company_name'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLineOne()) {
            $data->{'line_one'} = $object->getLineOne();
        }
        if (null !== $object->getLineTwo()) {
            $data->{'line_two'} = $object->getLineTwo();
        }
        if (null !== $object->getLineThree()) {
            $data->{'line_three'} = $object->getLineThree();
        }
        if (null !== $object->getTown()) {
            $data->{'town'} = $object->getTown();
        }
        if (null !== $object->getCounty()) {
            $data->{'county'} = $object->getCounty();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getPostalCode()) {
            $data->{'postal_code'} = $object->getPostalCode();
        }
        if (null !== $object->getFao()) {
            $data->{'fao'} = $object->getFao();
        }
        if (null !== $object->getCompanyName()) {
            $data->{'company_name'} = $object->getCompanyName();
        }
        return $data;
    }
}