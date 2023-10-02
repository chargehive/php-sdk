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
class ChargehiveChargeRefundTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeRefundTransaction';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeRefundTransaction';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeRefundTransaction();
        if (property_exists($data, 'SourceTransactionId')) {
            $object->setSourceTransactionId($data->{'SourceTransactionId'});
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($this->denormalizer->denormalize($data->{'amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'payment_method_token')) {
            $object->setPaymentMethodToken($data->{'payment_method_token'});
        }
        if (property_exists($data, 'merchant_reference')) {
            $object->setMerchantReference($data->{'merchant_reference'});
        }
        if (property_exists($data, 'refund_transaction_id')) {
            $object->setRefundTransactionId($data->{'refund_transaction_id'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSourceTransactionId()) {
            $data->{'SourceTransactionId'} = $object->getSourceTransactionId();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $this->normalizer->normalize($object->getAmount(), 'json', $context);
        }
        if (null !== $object->getPaymentMethodToken()) {
            $data->{'payment_method_token'} = $object->getPaymentMethodToken();
        }
        if (null !== $object->getMerchantReference()) {
            $data->{'merchant_reference'} = $object->getMerchantReference();
        }
        if (null !== $object->getRefundTransactionId()) {
            $data->{'refund_transaction_id'} = $object->getRefundTransactionId();
        }
        return $data;
    }
}