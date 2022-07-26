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
class ChtypeDeviceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeDevice';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeDevice';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \ChargeHive\Php\Sdk\Generated\Model\ChtypeDevice();
        if (property_exists($data, 'browser_accept_header')) {
            $object->setBrowserAcceptHeader($data->{'browser_accept_header'});
        }
        if (property_exists($data, 'color_depth')) {
            $object->setColorDepth($data->{'color_depth'});
        }
        if (property_exists($data, 'java_enabled')) {
            $object->setJavaEnabled($data->{'java_enabled'});
        }
        if (property_exists($data, 'javascript_enabled')) {
            $object->setJavascriptEnabled($data->{'javascript_enabled'});
        }
        if (property_exists($data, 'language')) {
            $object->setLanguage($data->{'language'});
        }
        if (property_exists($data, 'screen')) {
            $object->setScreen($this->denormalizer->denormalize($data->{'screen'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeDimension', 'json', $context));
        }
        if (property_exists($data, 'screen_available')) {
            $object->setScreenAvailable($this->denormalizer->denormalize($data->{'screen_available'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeDimension', 'json', $context));
        }
        if (property_exists($data, 'window_inner')) {
            $object->setWindowInner($this->denormalizer->denormalize($data->{'window_inner'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeDimension', 'json', $context));
        }
        if (property_exists($data, 'window_outer')) {
            $object->setWindowOuter($this->denormalizer->denormalize($data->{'window_outer'}, 'ChargeHive\\Php\\Sdk\\Generated\\Model\\ChtypeDimension', 'json', $context));
        }
        if (property_exists($data, 'timezone_offset_mins')) {
            $object->setTimezoneOffsetMins($data->{'timezone_offset_mins'});
        }
        if (property_exists($data, 'user_agent')) {
            $object->setUserAgent($data->{'user_agent'});
        }
        if (property_exists($data, 'ip_address')) {
            $object->setIpAddress($data->{'ip_address'});
        }
        if (property_exists($data, 'cookies_enabled')) {
            $object->setCookiesEnabled($data->{'cookies_enabled'});
        }
        if (property_exists($data, 'flash_version')) {
            $object->setFlashVersion($data->{'flash_version'});
        }
        if (property_exists($data, 'is_touch')) {
            $object->setIsTouch($data->{'is_touch'});
        }
        if (property_exists($data, 'os')) {
            $object->setOs($data->{'os'});
        }
        if (property_exists($data, 'os_version')) {
            $object->setOsVersion($data->{'os_version'});
        }
        if (property_exists($data, 'browser')) {
            $object->setBrowser($data->{'browser'});
        }
        if (property_exists($data, 'browser_version')) {
            $object->setBrowserVersion($data->{'browser_version'});
        }
        if (property_exists($data, 'device_manufacturer')) {
            $object->setDeviceManufacturer($data->{'device_manufacturer'});
        }
        if (property_exists($data, 'device_name')) {
            $object->setDeviceName($data->{'device_name'});
        }
        if (property_exists($data, 'device_version')) {
            $object->setDeviceVersion($data->{'device_version'});
        }
        if (property_exists($data, 'fingerprint')) {
            $object->setFingerprint($data->{'fingerprint'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'timezone')) {
            $object->setTimezone($data->{'timezone'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBrowserAcceptHeader()) {
            $data->{'browser_accept_header'} = $object->getBrowserAcceptHeader();
        }
        if (null !== $object->getColorDepth()) {
            $data->{'color_depth'} = $object->getColorDepth();
        }
        if (null !== $object->getJavaEnabled()) {
            $data->{'java_enabled'} = $object->getJavaEnabled();
        }
        if (null !== $object->getJavascriptEnabled()) {
            $data->{'javascript_enabled'} = $object->getJavascriptEnabled();
        }
        if (null !== $object->getLanguage()) {
            $data->{'language'} = $object->getLanguage();
        }
        if (null !== $object->getScreen()) {
            $data->{'screen'} = $this->normalizer->normalize($object->getScreen(), 'json', $context);
        }
        if (null !== $object->getScreenAvailable()) {
            $data->{'screen_available'} = $this->normalizer->normalize($object->getScreenAvailable(), 'json', $context);
        }
        if (null !== $object->getWindowInner()) {
            $data->{'window_inner'} = $this->normalizer->normalize($object->getWindowInner(), 'json', $context);
        }
        if (null !== $object->getWindowOuter()) {
            $data->{'window_outer'} = $this->normalizer->normalize($object->getWindowOuter(), 'json', $context);
        }
        if (null !== $object->getTimezoneOffsetMins()) {
            $data->{'timezone_offset_mins'} = $object->getTimezoneOffsetMins();
        }
        if (null !== $object->getUserAgent()) {
            $data->{'user_agent'} = $object->getUserAgent();
        }
        if (null !== $object->getIpAddress()) {
            $data->{'ip_address'} = $object->getIpAddress();
        }
        if (null !== $object->getCookiesEnabled()) {
            $data->{'cookies_enabled'} = $object->getCookiesEnabled();
        }
        if (null !== $object->getFlashVersion()) {
            $data->{'flash_version'} = $object->getFlashVersion();
        }
        if (null !== $object->getIsTouch()) {
            $data->{'is_touch'} = $object->getIsTouch();
        }
        if (null !== $object->getOs()) {
            $data->{'os'} = $object->getOs();
        }
        if (null !== $object->getOsVersion()) {
            $data->{'os_version'} = $object->getOsVersion();
        }
        if (null !== $object->getBrowser()) {
            $data->{'browser'} = $object->getBrowser();
        }
        if (null !== $object->getBrowserVersion()) {
            $data->{'browser_version'} = $object->getBrowserVersion();
        }
        if (null !== $object->getDeviceManufacturer()) {
            $data->{'device_manufacturer'} = $object->getDeviceManufacturer();
        }
        if (null !== $object->getDeviceName()) {
            $data->{'device_name'} = $object->getDeviceName();
        }
        if (null !== $object->getDeviceVersion()) {
            $data->{'device_version'} = $object->getDeviceVersion();
        }
        if (null !== $object->getFingerprint()) {
            $data->{'fingerprint'} = $object->getFingerprint();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getTimezone()) {
            $data->{'timezone'} = $object->getTimezone();
        }
        return $data;
    }
}