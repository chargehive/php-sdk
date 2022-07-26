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
class ChtypeThreeDSResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeThreeDSResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeThreeDSResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeThreeDSResult();
        if (property_exists($data, 'eci')) {
            $object->setEci($data->{'eci'});
        }
        if (property_exists($data, 'cavv')) {
            $object->setCavv($data->{'cavv'});
        }
        if (property_exists($data, 'xid')) {
            $object->setXid($data->{'xid'});
        }
        if (property_exists($data, 'enrollment')) {
            $object->setEnrollment($data->{'enrollment'});
        }
        if (property_exists($data, 'result')) {
            $object->setResult($data->{'result'});
        }
        if (property_exists($data, 'signature_status')) {
            $object->setSignatureStatus($data->{'signature_status'});
        }
        if (property_exists($data, 'server_transaction_id')) {
            $object->setServerTransactionId($data->{'server_transaction_id'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'major_version')) {
            $object->setMajorVersion($data->{'major_version'});
        }
        if (property_exists($data, 'version')) {
            $object->setVersion($data->{'version'});
        }
        if (property_exists($data, 'pa_req')) {
            $object->setPaReq($data->{'pa_req'});
        }
        if (property_exists($data, 'acs_url')) {
            $object->setAcsUrl($data->{'acs_url'});
        }
        if (property_exists($data, 'pa_res')) {
            $object->setPaRes($data->{'pa_res'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'timestamp')) {
            $object->setTimestamp(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'timestamp'}));
        }
        if (property_exists($data, 'liability')) {
            $object->setLiability($data->{'liability'});
        }
        if (property_exists($data, 'sdk_response')) {
            $object->setSdkResponse($data->{'sdk_response'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getEci()) {
            $data->{'eci'} = $object->getEci();
        }
        if (null !== $object->getCavv()) {
            $data->{'cavv'} = $object->getCavv();
        }
        if (null !== $object->getXid()) {
            $data->{'xid'} = $object->getXid();
        }
        if (null !== $object->getEnrollment()) {
            $data->{'enrollment'} = $object->getEnrollment();
        }
        if (null !== $object->getResult()) {
            $data->{'result'} = $object->getResult();
        }
        if (null !== $object->getSignatureStatus()) {
            $data->{'signature_status'} = $object->getSignatureStatus();
        }
        if (null !== $object->getServerTransactionId()) {
            $data->{'server_transaction_id'} = $object->getServerTransactionId();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getMajorVersion()) {
            $data->{'major_version'} = $object->getMajorVersion();
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }
        if (null !== $object->getPaReq()) {
            $data->{'pa_req'} = $object->getPaReq();
        }
        if (null !== $object->getAcsUrl()) {
            $data->{'acs_url'} = $object->getAcsUrl();
        }
        if (null !== $object->getPaRes()) {
            $data->{'pa_res'} = $object->getPaRes();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getTimestamp()) {
            $data->{'timestamp'} = $object->getTimestamp()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getLiability()) {
            $data->{'liability'} = $object->getLiability();
        }
        if (null !== $object->getSdkResponse()) {
            $data->{'sdk_response'} = $object->getSdkResponse();
        }
        return $data;
    }
}