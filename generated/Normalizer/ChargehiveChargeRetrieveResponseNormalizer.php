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
class ChargehiveChargeRetrieveResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeRetrieveResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehiveChargeRetrieveResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChargehiveChargeRetrieveResponse();
        if (property_exists($data, 'charge')) {
            $object->setCharge($this->denormalizer->denormalize($data->{'charge'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeCharge', 'json', $context));
        }
        if (property_exists($data, 'meta')) {
            $object->setMeta($this->denormalizer->denormalize($data->{'meta'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeChargeMeta', 'json', $context));
        }
        if (property_exists($data, 'created_time')) {
            $object->setCreatedTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_time'}));
        }
        if (property_exists($data, 'charge_id')) {
            $object->setChargeId($data->{'charge_id'});
        }
        if (property_exists($data, 'initiated_time')) {
            $object->setInitiatedTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'initiated_time'}));
        }
        if (property_exists($data, 'last_attempt_time')) {
            $object->setLastAttemptTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'last_attempt_time'}));
        }
        if (property_exists($data, 'Status')) {
            $object->setStatus($data->{'Status'});
        }
        if (property_exists($data, 'total_authed')) {
            $object->setTotalAuthed($data->{'total_authed'});
        }
        if (property_exists($data, 'total_captured')) {
            $object->setTotalCaptured($data->{'total_captured'});
        }
        if (property_exists($data, 'total_refunded')) {
            $object->setTotalRefunded($data->{'total_refunded'});
        }
        if (property_exists($data, 'merchant_subscription_id')) {
            $object->setMerchantSubscriptionId($data->{'merchant_subscription_id'});
        }
        if (property_exists($data, 'country')) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'labels')) {
            $values = array();
            foreach ($data->{'labels'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehivechtypeLabel', 'json', $context);
            }
            $object->setLabels($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCharge()) {
            $data->{'charge'} = $this->normalizer->normalize($object->getCharge(), 'json', $context);
        }
        if (null !== $object->getMeta()) {
            $data->{'meta'} = $this->normalizer->normalize($object->getMeta(), 'json', $context);
        }
        if (null !== $object->getCreatedTime()) {
            $data->{'created_time'} = $object->getCreatedTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getChargeId()) {
            $data->{'charge_id'} = $object->getChargeId();
        }
        if (null !== $object->getInitiatedTime()) {
            $data->{'initiated_time'} = $object->getInitiatedTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getLastAttemptTime()) {
            $data->{'last_attempt_time'} = $object->getLastAttemptTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getStatus()) {
            $data->{'Status'} = $object->getStatus();
        }
        if (null !== $object->getTotalAuthed()) {
            $data->{'total_authed'} = $object->getTotalAuthed();
        }
        if (null !== $object->getTotalCaptured()) {
            $data->{'total_captured'} = $object->getTotalCaptured();
        }
        if (null !== $object->getTotalRefunded()) {
            $data->{'total_refunded'} = $object->getTotalRefunded();
        }
        if (null !== $object->getMerchantSubscriptionId()) {
            $data->{'merchant_subscription_id'} = $object->getMerchantSubscriptionId();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getLabels()) {
            $values = array();
            foreach ($object->getLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'labels'} = $values;
        }
        return $data;
    }
}