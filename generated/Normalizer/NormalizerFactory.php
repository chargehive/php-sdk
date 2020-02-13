<?php

namespace ChargeHive\Php\Sdk\Generated\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new ChargehiveChargeAuthorizeRequestNormalizer();
        $normalizers[] = new ChargehiveChargeAuthorizeResponseNormalizer();
        $normalizers[] = new ChargehiveChargeCancelRequestNormalizer();
        $normalizers[] = new ChargehiveChargeCancelResponseNormalizer();
        $normalizers[] = new ChargehiveChargeCaptureRequestNormalizer();
        $normalizers[] = new ChargehiveChargeCaptureResponseNormalizer();
        $normalizers[] = new ChargehiveChargeCreateRequestNormalizer();
        $normalizers[] = new ChargehiveChargeCreateResponseNormalizer();
        $normalizers[] = new ChargehiveChargeFraudScanRequestNormalizer();
        $normalizers[] = new ChargehiveChargeFraudScanResponseNormalizer();
        $normalizers[] = new ChargehiveChargeModifyRequestNormalizer();
        $normalizers[] = new ChargehiveChargeModifyResponseNormalizer();
        $normalizers[] = new ChargehiveChargeRefundRequestNormalizer();
        $normalizers[] = new ChargehiveChargeRefundResponseNormalizer();
        $normalizers[] = new ChargehiveChargeRefundTransactionNormalizer();
        $normalizers[] = new ChargehiveConfigurationApplyRequestNormalizer();
        $normalizers[] = new ChargehiveConfigurationApplyResponseNormalizer();
        $normalizers[] = new ChargehiveConfigurationDeleteResponseNormalizer();
        $normalizers[] = new ChargehiveConfigurationGetRequestNormalizer();
        $normalizers[] = new ChargehiveConfigurationGetResponseNormalizer();
        $normalizers[] = new ChargehiveConfigurationListItemNormalizer();
        $normalizers[] = new ChargehiveConfigurationListRequestNormalizer();
        $normalizers[] = new ChargehiveConfigurationListResponseNormalizer();
        $normalizers[] = new ChargehiveConnectionConfirmRequestNormalizer();
        $normalizers[] = new ChargehiveConnectionValidateRequestNormalizer();
        $normalizers[] = new ChargehiveConnectionValidateResponseNormalizer();
        $normalizers[] = new ChargehiveMethodUnlockRequestNormalizer();
        $normalizers[] = new ChargehiveMethodUnlockResponseNormalizer();
        $normalizers[] = new ChargehiveMethodUpdateRequestNormalizer();
        $normalizers[] = new ChargehiveMethodUpdateResponseNormalizer();
        $normalizers[] = new ChargehiveMethodVerifyRequestNormalizer();
        $normalizers[] = new ChargehiveMethodVerifyResponseNormalizer();
        $normalizers[] = new ChargehiveSchedulerOnDemandTriggerRequestNormalizer();
        $normalizers[] = new ChargehiveSchedulerOnDemandTriggerResponseNormalizer();
        $normalizers[] = new ChargehiveStringTransportNormalizer();
        $normalizers[] = new ChargehiveSupportedMethodUpdateTypesNormalizer();
        $normalizers[] = new ChtypeAddressNormalizer();
        $normalizers[] = new ChtypeAmountNormalizer();
        $normalizers[] = new ChtypeAttemptDetailNormalizer();
        $normalizers[] = new ChtypeChargeItemNormalizer();
        $normalizers[] = new ChtypeChargeMetaNormalizer();
        $normalizers[] = new ChtypeCompanyNormalizer();
        $normalizers[] = new ChtypeDeliveryNormalizer();
        $normalizers[] = new ChtypeDeviceNormalizer();
        $normalizers[] = new ChtypeDimensionNormalizer();
        $normalizers[] = new ChtypeFraudFactorNormalizer();
        $normalizers[] = new ChtypeFraudResultNormalizer();
        $normalizers[] = new ChtypeFraudScoreNormalizer();
        $normalizers[] = new ChtypePaymentMethodNormalizer();
        $normalizers[] = new ChtypePaymentMethodInfoNormalizer();
        $normalizers[] = new ChtypePaymentMethodSchemaCardNormalizer();
        $normalizers[] = new ChtypePersonNormalizer();
        $normalizers[] = new ChtypeReasonNormalizer();
        $normalizers[] = new ChtypeResponseDetailNormalizer();
        $normalizers[] = new ChtypeThreeDSResultNormalizer();
        $normalizers[] = new ChtypeTransactionNormalizer();
        $normalizers[] = new ChtypeTransactionDetailNormalizer();
        $normalizers[] = new ChtypeVerificationResultNormalizer();
        $normalizers[] = new ChtypeVerifyRequestDataNormalizer();
        return $normalizers;
    }
}