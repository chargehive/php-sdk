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
class ChtypeChargeItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeChargeItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeChargeItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeChargeItem();
        if (property_exists($data, 'subscription_id')) {
            $object->setSubscriptionId($data->{'subscription_id'});
        }
        if (property_exists($data, 'renewal_number')) {
            $object->setRenewalNumber($data->{'renewal_number'});
        }
        if (property_exists($data, 'duration')) {
            $object->setDuration($data->{'duration'});
        }
        if (property_exists($data, 'start_date')) {
            $object->setStartDate(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'start_date'}));
        }
        if (property_exists($data, 'end_date')) {
            $object->setEndDate(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'end_date'}));
        }
        if (property_exists($data, 'product_type')) {
            $object->setProductType($data->{'product_type'});
        }
        if (property_exists($data, 'sku_type')) {
            $object->setSkuType($data->{'sku_type'});
        }
        if (property_exists($data, 'delivery')) {
            $object->setDelivery($this->denormalizer->denormalize($data->{'delivery'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeDelivery', 'json', $context));
        }
        if (property_exists($data, 'quantity')) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'unit_price')) {
            $object->setUnitPrice($this->denormalizer->denormalize($data->{'unit_price'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'tax_amount')) {
            $object->setTaxAmount($this->denormalizer->denormalize($data->{'tax_amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'discount_amount')) {
            $object->setDiscountAmount($this->denormalizer->denormalize($data->{'discount_amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'product_code')) {
            $object->setProductCode($data->{'product_code'});
        }
        if (property_exists($data, 'sku_code')) {
            $object->setSkuCode($data->{'sku_code'});
        }
        if (property_exists($data, 'term_units')) {
            $object->setTermUnits($data->{'term_units'});
        }
        if (property_exists($data, 'term_type')) {
            $object->setTermType($data->{'term_type'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSubscriptionId()) {
            $data->{'subscription_id'} = $object->getSubscriptionId();
        }
        if (null !== $object->getRenewalNumber()) {
            $data->{'renewal_number'} = $object->getRenewalNumber();
        }
        if (null !== $object->getDuration()) {
            $data->{'duration'} = $object->getDuration();
        }
        if (null !== $object->getStartDate()) {
            $data->{'start_date'} = $object->getStartDate()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getEndDate()) {
            $data->{'end_date'} = $object->getEndDate()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getProductType()) {
            $data->{'product_type'} = $object->getProductType();
        }
        if (null !== $object->getSkuType()) {
            $data->{'sku_type'} = $object->getSkuType();
        }
        if (null !== $object->getDelivery()) {
            $data->{'delivery'} = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        if (null !== $object->getUnitPrice()) {
            $data->{'unit_price'} = $this->normalizer->normalize($object->getUnitPrice(), 'json', $context);
        }
        if (null !== $object->getTaxAmount()) {
            $data->{'tax_amount'} = $this->normalizer->normalize($object->getTaxAmount(), 'json', $context);
        }
        if (null !== $object->getDiscountAmount()) {
            $data->{'discount_amount'} = $this->normalizer->normalize($object->getDiscountAmount(), 'json', $context);
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getProductCode()) {
            $data->{'product_code'} = $object->getProductCode();
        }
        if (null !== $object->getSkuCode()) {
            $data->{'sku_code'} = $object->getSkuCode();
        }
        if (null !== $object->getTermUnits()) {
            $data->{'term_units'} = $object->getTermUnits();
        }
        if (null !== $object->getTermType()) {
            $data->{'term_type'} = $object->getTermType();
        }
        return $data;
    }
}