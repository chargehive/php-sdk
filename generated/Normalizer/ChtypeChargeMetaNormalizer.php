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
class ChtypeChargeMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeChargeMeta';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeChargeMeta';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeChargeMeta();
        if (property_exists($data, 'billing_address')) {
            $object->setBillingAddress($this->denormalizer->denormalize($data->{'billing_address'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAddress', 'json', $context));
        }
        if (property_exists($data, 'delivery_address')) {
            $object->setDeliveryAddress($this->denormalizer->denormalize($data->{'delivery_address'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAddress', 'json', $context));
        }
        if (property_exists($data, 'items')) {
            $values = array();
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeChargeItem', 'json', $context);
            }
            $object->setItems($values);
        }
        if (property_exists($data, 'terms')) {
            $object->setTerms($data->{'terms'});
        }
        if (property_exists($data, 'note')) {
            $object->setNote($data->{'note'});
        }
        if (property_exists($data, 'merchant_memo')) {
            $object->setMerchantMemo($data->{'merchant_memo'});
        }
        if (property_exists($data, 'invoice_date')) {
            $object->setInvoiceDate(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'invoice_date'}));
        }
        if (property_exists($data, 'due_date')) {
            $object->setDueDate(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'due_date'}));
        }
        if (property_exists($data, 'discount_amount')) {
            $object->setDiscountAmount($this->denormalizer->denormalize($data->{'discount_amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'delivery_amount')) {
            $object->setDeliveryAmount($this->denormalizer->denormalize($data->{'delivery_amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'tax_amount')) {
            $object->setTaxAmount($this->denormalizer->denormalize($data->{'tax_amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'total_amount')) {
            $object->setTotalAmount($this->denormalizer->denormalize($data->{'total_amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'person')) {
            $object->setPerson($this->denormalizer->denormalize($data->{'person'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypePerson', 'json', $context));
        }
        if (property_exists($data, 'company')) {
            $object->setCompany($this->denormalizer->denormalize($data->{'company'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeCompany', 'json', $context));
        }
        if (property_exists($data, 'ip_address')) {
            $object->setIpAddress($data->{'ip_address'});
        }
        if (property_exists($data, 'delivery')) {
            $object->setDelivery($this->denormalizer->denormalize($data->{'delivery'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeDelivery', 'json', $context));
        }
        if (property_exists($data, 'device')) {
            $object->setDevice($this->denormalizer->denormalize($data->{'device'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeDevice', 'json', $context));
        }
        if (property_exists($data, 'customer_id')) {
            $object->setCustomerId($data->{'customer_id'});
        }
        if (property_exists($data, 'placement_id')) {
            $object->setPlacementId($data->{'placement_id'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBillingAddress()) {
            $data->{'billing_address'} = $this->normalizer->normalize($object->getBillingAddress(), 'json', $context);
        }
        if (null !== $object->getDeliveryAddress()) {
            $data->{'delivery_address'} = $this->normalizer->normalize($object->getDeliveryAddress(), 'json', $context);
        }
        if (null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'items'} = $values;
        }
        if (null !== $object->getTerms()) {
            $data->{'terms'} = $object->getTerms();
        }
        if (null !== $object->getNote()) {
            $data->{'note'} = $object->getNote();
        }
        if (null !== $object->getMerchantMemo()) {
            $data->{'merchant_memo'} = $object->getMerchantMemo();
        }
        if (null !== $object->getInvoiceDate()) {
            $data->{'invoice_date'} = $object->getInvoiceDate()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getDueDate()) {
            $data->{'due_date'} = $object->getDueDate()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getDiscountAmount()) {
            $data->{'discount_amount'} = $this->normalizer->normalize($object->getDiscountAmount(), 'json', $context);
        }
        if (null !== $object->getDeliveryAmount()) {
            $data->{'delivery_amount'} = $this->normalizer->normalize($object->getDeliveryAmount(), 'json', $context);
        }
        if (null !== $object->getTaxAmount()) {
            $data->{'tax_amount'} = $this->normalizer->normalize($object->getTaxAmount(), 'json', $context);
        }
        if (null !== $object->getTotalAmount()) {
            $data->{'total_amount'} = $this->normalizer->normalize($object->getTotalAmount(), 'json', $context);
        }
        if (null !== $object->getPerson()) {
            $data->{'person'} = $this->normalizer->normalize($object->getPerson(), 'json', $context);
        }
        if (null !== $object->getCompany()) {
            $data->{'company'} = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if (null !== $object->getIpAddress()) {
            $data->{'ip_address'} = $object->getIpAddress();
        }
        if (null !== $object->getDelivery()) {
            $data->{'delivery'} = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        if (null !== $object->getDevice()) {
            $data->{'device'} = $this->normalizer->normalize($object->getDevice(), 'json', $context);
        }
        if (null !== $object->getCustomerId()) {
            $data->{'customer_id'} = $object->getCustomerId();
        }
        if (null !== $object->getPlacementId()) {
            $data->{'placement_id'} = $object->getPlacementId();
        }
        return $data;
    }
}