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
class ChtypeTransactionDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeTransactionDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeTransactionDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeTransactionDetail();
        if (property_exists($data, 'actor_id')) {
            $object->setActorId($data->{'actor_id'});
        }
        if (property_exists($data, 'actor_version')) {
            $object->setActorVersion($data->{'actor_version'});
        }
        if (property_exists($data, 'actor_type')) {
            $object->setActorType($data->{'actor_type'});
        }
        if (property_exists($data, 'transaction_id')) {
            $object->setTransactionId($data->{'transaction_id'});
        }
        if (property_exists($data, 'requested_amount')) {
            $object->setRequestedAmount($this->denormalizer->denormalize($data->{'requested_amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'processed_amount')) {
            $object->setProcessedAmount($this->denormalizer->denormalize($data->{'processed_amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'fee_estimate')) {
            $object->setFeeEstimate($this->denormalizer->denormalize($data->{'fee_estimate'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'fee_actual')) {
            $object->setFeeActual($this->denormalizer->denormalize($data->{'fee_actual'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'start_time')) {
            $object->setStartTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'start_time'}));
        }
        if (property_exists($data, 'end_time')) {
            $object->setEndTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'end_time'}));
        }
        if (property_exists($data, 'was_successful')) {
            $object->setWasSuccessful($data->{'was_successful'});
        }
        if (property_exists($data, 'environment')) {
            $object->setEnvironment($data->{'environment'});
        }
        if (property_exists($data, 'response')) {
            $object->setResponse($this->denormalizer->denormalize($data->{'response'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeResponseDetail', 'json', $context));
        }
        if (property_exists($data, 'verification_result')) {
            $object->setVerificationResult($this->denormalizer->denormalize($data->{'verification_result'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeVerificationResult', 'json', $context));
        }
        if (property_exists($data, 'additional_data')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'additional_data'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setAdditionalData($values);
        }
        if (property_exists($data, 'authorization_code')) {
            $object->setAuthorizationCode($data->{'authorization_code'});
        }
        if (property_exists($data, 'liability')) {
            $object->setLiability($data->{'liability'});
        }
        if (property_exists($data, 'connector_library')) {
            $object->setConnectorLibrary($data->{'connector_library'});
        }
        if (property_exists($data, 'connector_id')) {
            $object->setConnectorId($data->{'connector_id'});
        }
        if (property_exists($data, 'primary')) {
            $object->setPrimary($data->{'primary'});
        }
        if (property_exists($data, 'network_id')) {
            $object->setNetworkId($data->{'network_id'});
        }
        if (property_exists($data, 'psp_transaction_id')) {
            $object->setPspTransactionId($data->{'psp_transaction_id'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getActorId()) {
            $data->{'actor_id'} = $object->getActorId();
        }
        if (null !== $object->getActorVersion()) {
            $data->{'actor_version'} = $object->getActorVersion();
        }
        if (null !== $object->getActorType()) {
            $data->{'actor_type'} = $object->getActorType();
        }
        if (null !== $object->getTransactionId()) {
            $data->{'transaction_id'} = $object->getTransactionId();
        }
        if (null !== $object->getRequestedAmount()) {
            $data->{'requested_amount'} = $this->normalizer->normalize($object->getRequestedAmount(), 'json', $context);
        }
        if (null !== $object->getProcessedAmount()) {
            $data->{'processed_amount'} = $this->normalizer->normalize($object->getProcessedAmount(), 'json', $context);
        }
        if (null !== $object->getFeeEstimate()) {
            $data->{'fee_estimate'} = $this->normalizer->normalize($object->getFeeEstimate(), 'json', $context);
        }
        if (null !== $object->getFeeActual()) {
            $data->{'fee_actual'} = $this->normalizer->normalize($object->getFeeActual(), 'json', $context);
        }
        if (null !== $object->getStartTime()) {
            $data->{'start_time'} = $object->getStartTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getEndTime()) {
            $data->{'end_time'} = $object->getEndTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getWasSuccessful()) {
            $data->{'was_successful'} = $object->getWasSuccessful();
        }
        if (null !== $object->getEnvironment()) {
            $data->{'environment'} = $object->getEnvironment();
        }
        if (null !== $object->getResponse()) {
            $data->{'response'} = $this->normalizer->normalize($object->getResponse(), 'json', $context);
        }
        if (null !== $object->getVerificationResult()) {
            $data->{'verification_result'} = $this->normalizer->normalize($object->getVerificationResult(), 'json', $context);
        }
        if (null !== $object->getAdditionalData()) {
            $values = new \stdClass();
            foreach ($object->getAdditionalData() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'additional_data'} = $values;
        }
        if (null !== $object->getAuthorizationCode()) {
            $data->{'authorization_code'} = $object->getAuthorizationCode();
        }
        if (null !== $object->getLiability()) {
            $data->{'liability'} = $object->getLiability();
        }
        if (null !== $object->getConnectorLibrary()) {
            $data->{'connector_library'} = $object->getConnectorLibrary();
        }
        if (null !== $object->getConnectorId()) {
            $data->{'connector_id'} = $object->getConnectorId();
        }
        if (null !== $object->getPrimary()) {
            $data->{'primary'} = $object->getPrimary();
        }
        if (null !== $object->getNetworkId()) {
            $data->{'network_id'} = $object->getNetworkId();
        }
        if (null !== $object->getPspTransactionId()) {
            $data->{'psp_transaction_id'} = $object->getPspTransactionId();
        }
        return $data;
    }
}