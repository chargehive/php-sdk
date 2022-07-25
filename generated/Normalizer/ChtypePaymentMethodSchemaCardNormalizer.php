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
class ChtypePaymentMethodSchemaCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethodSchemaCard';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePaymentMethodSchemaCard';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypePaymentMethodSchemaCard();
        if (property_exists($data, 'name_on_card')) {
            $object->setNameOnCard($data->{'name_on_card'});
        }
        if (property_exists($data, 'valid_from_month')) {
            $object->setValidFromMonth($data->{'valid_from_month'});
        }
        if (property_exists($data, 'valid_from_year')) {
            $object->setValidFromYear($data->{'valid_from_year'});
        }
        if (property_exists($data, 'expiry_month')) {
            $object->setExpiryMonth($data->{'expiry_month'});
        }
        if (property_exists($data, 'expiry_year')) {
            $object->setExpiryYear($data->{'expiry_year'});
        }
        if (property_exists($data, 'issue_number')) {
            $object->setIssueNumber($data->{'issue_number'});
        }
        if (property_exists($data, 'number')) {
            $object->setNumber($data->{'number'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getNameOnCard()) {
            $data->{'name_on_card'} = $object->getNameOnCard();
        }
        if (null !== $object->getValidFromMonth()) {
            $data->{'valid_from_month'} = $object->getValidFromMonth();
        }
        if (null !== $object->getValidFromYear()) {
            $data->{'valid_from_year'} = $object->getValidFromYear();
        }
        if (null !== $object->getExpiryMonth()) {
            $data->{'expiry_month'} = $object->getExpiryMonth();
        }
        if (null !== $object->getExpiryYear()) {
            $data->{'expiry_year'} = $object->getExpiryYear();
        }
        if (null !== $object->getIssueNumber()) {
            $data->{'issue_number'} = $object->getIssueNumber();
        }
        if (null !== $object->getNumber()) {
            $data->{'number'} = $object->getNumber();
        }
        return $data;
    }
}