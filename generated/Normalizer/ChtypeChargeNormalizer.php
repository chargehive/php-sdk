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
class ChtypeChargeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeCharge';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeCharge';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeCharge();
        if (property_exists($data, 'charge_id')) {
            $object->setChargeId($data->{'charge_id'});
        }
        if (property_exists($data, 'version')) {
            $object->setVersion($data->{'version'});
        }
        if (property_exists($data, 'intent')) {
            $object->setIntent($data->{'intent'});
        }
        if (property_exists($data, 'contract')) {
            $object->setContract($data->{'contract'});
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($this->denormalizer->denormalize($data->{'amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'payment_method_ids')) {
            $values = array();
            foreach ($data->{'payment_method_ids'} as $value) {
                $values[] = $value;
            }
            $object->setPaymentMethodIds($values);
        }
        if (property_exists($data, 'expiry_time')) {
            $object->setExpiryTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'expiry_time'}));
        }
        if (property_exists($data, 'merchant_reference')) {
            $object->setMerchantReference($data->{'merchant_reference'});
        }
        if (property_exists($data, 'statement_descriptor')) {
            $object->setStatementDescriptor($this->denormalizer->denormalize($data->{'statement_descriptor'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeStatementDescriptor', 'json', $context));
        }
        if (property_exists($data, 'references')) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'references'} as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setReferences($values_1);
        }
        if (property_exists($data, 'labels')) {
            $values_2 = array();
            foreach ($data->{'labels'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChargehivechtypeLabel', 'json', $context);
            }
            $object->setLabels($values_2);
        }
        if (property_exists($data, 'charge_key')) {
            $object->setChargeKey($data->{'charge_key'});
        }
        if (property_exists($data, 'user_locale')) {
            $object->setUserLocale($data->{'user_locale'});
        }
        if (property_exists($data, 'user_location')) {
            $object->setUserLocation($data->{'user_location'});
        }
        if (property_exists($data, 'environment')) {
            $object->setEnvironment($data->{'environment'});
        }
        if (property_exists($data, 'language')) {
            $object->setLanguage($data->{'language'});
        }
        if (property_exists($data, 'preferred_method_type')) {
            $object->setPreferredMethodType($data->{'preferred_method_type'});
        }
        if (property_exists($data, 'billing_profile_id')) {
            $object->setBillingProfileId($data->{'billing_profile_id'});
        }
        if (property_exists($data, 'initial_transaction')) {
            $values_3 = array();
            foreach ($data->{'initial_transaction'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeInitialTransactionData', 'json', $context);
            }
            $object->setInitialTransaction($values_3);
        }
        if (property_exists($data, 'subscription_id')) {
            $object->setSubscriptionId($data->{'subscription_id'});
        }
        if (property_exists($data, 'challenge_window_size')) {
            $object->setChallengeWindowSize($data->{'challenge_window_size'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChargeId()) {
            $data->{'charge_id'} = $object->getChargeId();
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }
        if (null !== $object->getIntent()) {
            $data->{'intent'} = $object->getIntent();
        }
        if (null !== $object->getContract()) {
            $data->{'contract'} = $object->getContract();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $this->normalizer->normalize($object->getAmount(), 'json', $context);
        }
        if (null !== $object->getPaymentMethodIds()) {
            $values = array();
            foreach ($object->getPaymentMethodIds() as $value) {
                $values[] = $value;
            }
            $data->{'payment_method_ids'} = $values;
        }
        if (null !== $object->getExpiryTime()) {
            $data->{'expiry_time'} = $object->getExpiryTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getMerchantReference()) {
            $data->{'merchant_reference'} = $object->getMerchantReference();
        }
        if (null !== $object->getStatementDescriptor()) {
            $data->{'statement_descriptor'} = $this->normalizer->normalize($object->getStatementDescriptor(), 'json', $context);
        }
        if (null !== $object->getReferences()) {
            $values_1 = new \stdClass();
            foreach ($object->getReferences() as $key => $value_1) {
                $values_1->{$key} = $value_1;
            }
            $data->{'references'} = $values_1;
        }
        if (null !== $object->getLabels()) {
            $values_2 = array();
            foreach ($object->getLabels() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'labels'} = $values_2;
        }
        if (null !== $object->getChargeKey()) {
            $data->{'charge_key'} = $object->getChargeKey();
        }
        if (null !== $object->getUserLocale()) {
            $data->{'user_locale'} = $object->getUserLocale();
        }
        if (null !== $object->getUserLocation()) {
            $data->{'user_location'} = $object->getUserLocation();
        }
        if (null !== $object->getEnvironment()) {
            $data->{'environment'} = $object->getEnvironment();
        }
        if (null !== $object->getLanguage()) {
            $data->{'language'} = $object->getLanguage();
        }
        if (null !== $object->getPreferredMethodType()) {
            $data->{'preferred_method_type'} = $object->getPreferredMethodType();
        }
        if (null !== $object->getBillingProfileId()) {
            $data->{'billing_profile_id'} = $object->getBillingProfileId();
        }
        if (null !== $object->getInitialTransaction()) {
            $values_3 = array();
            foreach ($object->getInitialTransaction() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'initial_transaction'} = $values_3;
        }
        if (null !== $object->getSubscriptionId()) {
            $data->{'subscription_id'} = $object->getSubscriptionId();
        }
        if (null !== $object->getChallengeWindowSize()) {
            $data->{'challenge_window_size'} = $object->getChallengeWindowSize();
        }
        return $data;
    }
}