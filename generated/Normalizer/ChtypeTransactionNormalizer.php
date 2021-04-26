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
class ChtypeTransactionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeTransaction';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeTransaction';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeTransaction();
        if (property_exists($data, 'token_id')) {
            $object->setTokenId($data->{'token_id'});
        }
        if (property_exists($data, 'transaction_id')) {
            $object->setTransactionId($data->{'transaction_id'});
        }
        if (property_exists($data, 'details')) {
            $values = array();
            foreach ($data->{'details'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeTransactionDetail', 'json', $context);
            }
            $object->setDetails($values);
        }
        if (property_exists($data, 'payment_type')) {
            $object->setPaymentType($data->{'payment_type'});
        }
        if (property_exists($data, 'payment_scheme')) {
            $object->setPaymentScheme($data->{'payment_scheme'});
        }
        if (property_exists($data, 'transaction_type')) {
            $object->setTransactionType($data->{'transaction_type'});
        }
        if (property_exists($data, 'request_amount')) {
            $object->setRequestAmount($this->denormalizer->denormalize($data->{'request_amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'transacted_amount')) {
            $object->setTransactedAmount($this->denormalizer->denormalize($data->{'transacted_amount'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAmount', 'json', $context));
        }
        if (property_exists($data, 'contract')) {
            $object->setContract($data->{'contract'});
        }
        if (property_exists($data, 'statement_descriptor')) {
            $object->setStatementDescriptor($data->{'statement_descriptor'});
        }
        if (property_exists($data, 'result')) {
            $object->setResult($data->{'result'});
        }
        if (property_exists($data, 'verify_request')) {
            $object->setVerifyRequest($this->denormalizer->denormalize($data->{'verify_request'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeVerifyRequestData', 'json', $context));
        }
        if (property_exists($data, 'failure_type')) {
            $object->setFailureType($data->{'failure_type'});
        }
        if (property_exists($data, 'arn')) {
            $object->setArn($data->{'arn'});
        }
        if (property_exists($data, 'verified')) {
            $object->setVerified($data->{'verified'});
        }
        if (property_exists($data, 'liability')) {
            $object->setLiability($data->{'liability'});
        }
        if (property_exists($data, 'attempt_detail')) {
            $object->setAttemptDetail($this->denormalizer->denormalize($data->{'attempt_detail'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeAttemptDetail', 'json', $context));
        }
        if (property_exists($data, 'fraud_results')) {
            $values_1 = array();
            foreach ($data->{'fraud_results'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeFraudResult', 'json', $context);
            }
            $object->setFraudResults($values_1);
        }
        if (property_exists($data, 'response')) {
            $object->setResponse($this->denormalizer->denormalize($data->{'response'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeResponseDetail', 'json', $context));
        }
        if (property_exists($data, 'source_transaction_id')) {
            $object->setSourceTransactionId($data->{'source_transaction_id'});
        }
        if (property_exists($data, 'payment_method_id')) {
            $object->setPaymentMethodId($data->{'payment_method_id'});
        }
        if (property_exists($data, 'transaction_sub_type')) {
            $object->setTransactionSubType($data->{'transaction_sub_type'});
        }
        if (property_exists($data, 'ancillary_transactions')) {
            $values_2 = array();
            foreach ($data->{'ancillary_transactions'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeTransaction', 'json', $context);
            }
            $object->setAncillaryTransactions($values_2);
        }
        if (property_exists($data, 'requested_connector_id')) {
            $object->setRequestedConnectorId($data->{'requested_connector_id'});
        }
        if (property_exists($data, 'requested_connector_library')) {
            $object->setRequestedConnectorLibrary($data->{'requested_connector_library'});
        }
        if (property_exists($data, 'transaction_time')) {
            $object->setTransactionTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'transaction_time'}));
        }
        if (property_exists($data, 'payment_provider')) {
            $object->setPaymentProvider($data->{'payment_provider'});
        }
        if (property_exists($data, 'payment_input_type')) {
            $object->setPaymentInputType($data->{'payment_input_type'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTokenId()) {
            $data->{'token_id'} = $object->getTokenId();
        }
        if (null !== $object->getTransactionId()) {
            $data->{'transaction_id'} = $object->getTransactionId();
        }
        if (null !== $object->getDetails()) {
            $values = array();
            foreach ($object->getDetails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'details'} = $values;
        }
        if (null !== $object->getPaymentType()) {
            $data->{'payment_type'} = $object->getPaymentType();
        }
        if (null !== $object->getPaymentScheme()) {
            $data->{'payment_scheme'} = $object->getPaymentScheme();
        }
        if (null !== $object->getTransactionType()) {
            $data->{'transaction_type'} = $object->getTransactionType();
        }
        if (null !== $object->getRequestAmount()) {
            $data->{'request_amount'} = $this->normalizer->normalize($object->getRequestAmount(), 'json', $context);
        }
        if (null !== $object->getTransactedAmount()) {
            $data->{'transacted_amount'} = $this->normalizer->normalize($object->getTransactedAmount(), 'json', $context);
        }
        if (null !== $object->getContract()) {
            $data->{'contract'} = $object->getContract();
        }
        if (null !== $object->getStatementDescriptor()) {
            $data->{'statement_descriptor'} = $object->getStatementDescriptor();
        }
        if (null !== $object->getResult()) {
            $data->{'result'} = $object->getResult();
        }
        if (null !== $object->getVerifyRequest()) {
            $data->{'verify_request'} = $this->normalizer->normalize($object->getVerifyRequest(), 'json', $context);
        }
        if (null !== $object->getFailureType()) {
            $data->{'failure_type'} = $object->getFailureType();
        }
        if (null !== $object->getArn()) {
            $data->{'arn'} = $object->getArn();
        }
        if (null !== $object->getVerified()) {
            $data->{'verified'} = $object->getVerified();
        }
        if (null !== $object->getLiability()) {
            $data->{'liability'} = $object->getLiability();
        }
        if (null !== $object->getAttemptDetail()) {
            $data->{'attempt_detail'} = $this->normalizer->normalize($object->getAttemptDetail(), 'json', $context);
        }
        if (null !== $object->getFraudResults()) {
            $values_1 = array();
            foreach ($object->getFraudResults() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'fraud_results'} = $values_1;
        }
        if (null !== $object->getResponse()) {
            $data->{'response'} = $this->normalizer->normalize($object->getResponse(), 'json', $context);
        }
        if (null !== $object->getSourceTransactionId()) {
            $data->{'source_transaction_id'} = $object->getSourceTransactionId();
        }
        if (null !== $object->getPaymentMethodId()) {
            $data->{'payment_method_id'} = $object->getPaymentMethodId();
        }
        if (null !== $object->getTransactionSubType()) {
            $data->{'transaction_sub_type'} = $object->getTransactionSubType();
        }
        if (null !== $object->getAncillaryTransactions()) {
            $values_2 = array();
            foreach ($object->getAncillaryTransactions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'ancillary_transactions'} = $values_2;
        }
        if (null !== $object->getRequestedConnectorId()) {
            $data->{'requested_connector_id'} = $object->getRequestedConnectorId();
        }
        if (null !== $object->getRequestedConnectorLibrary()) {
            $data->{'requested_connector_library'} = $object->getRequestedConnectorLibrary();
        }
        if (null !== $object->getTransactionTime()) {
            $data->{'transaction_time'} = $object->getTransactionTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getPaymentProvider()) {
            $data->{'payment_provider'} = $object->getPaymentProvider();
        }
        if (null !== $object->getPaymentInputType()) {
            $data->{'payment_input_type'} = $object->getPaymentInputType();
        }
        return $data;
    }
}