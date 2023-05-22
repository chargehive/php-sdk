<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ChargeHive\Api\Grpc;

/**
 */
class ChargeHiveClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \ChargeHive\Api\Grpc\StringTransport $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Ping(\ChargeHive\Api\Grpc\StringTransport $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/Ping',
        $argument,
        ['\ChargeHive\Api\Grpc\StringTransport', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConnectionValidateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConnectionValidate(\ChargeHive\Api\Grpc\ConnectionValidateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConnectionValidate',
        $argument,
        ['\ChargeHive\Api\Grpc\ConnectionValidateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConnectionConfirmRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConnectionValidationConfirm(\ChargeHive\Api\Grpc\ConnectionConfirmRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConnectionValidationConfirm',
        $argument,
        ['\ChargeHive\Api\Grpc\ConnectionValidateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConfigurationApplyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigurationApply(\ChargeHive\Api\Grpc\ConfigurationApplyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConfigurationApply',
        $argument,
        ['\ChargeHive\Api\Grpc\ConfigurationApplyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConfigurationGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigurationGet(\ChargeHive\Api\Grpc\ConfigurationGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConfigurationGet',
        $argument,
        ['\ChargeHive\Api\Grpc\ConfigurationGetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConfigurationListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigurationList(\ChargeHive\Api\Grpc\ConfigurationListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConfigurationList',
        $argument,
        ['\ChargeHive\Api\Grpc\ConfigurationListResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConfigurationEnableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigurationEnable(\ChargeHive\Api\Grpc\ConfigurationEnableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConfigurationEnable',
        $argument,
        ['\ChargeHive\Api\Grpc\ConfigurationEnableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConfigurationDisableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigurationDisable(\ChargeHive\Api\Grpc\ConfigurationDisableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConfigurationDisable',
        $argument,
        ['\ChargeHive\Api\Grpc\ConfigurationDisableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ConfigurationDeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigurationDelete(\ChargeHive\Api\Grpc\ConfigurationDeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ConfigurationDelete',
        $argument,
        ['\ChargeHive\Api\Grpc\ConfigurationDeleteResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SchedulerTrigger(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/SchedulerTrigger',
        $argument,
        ['\ChargeHive\Api\Grpc\SchedulerTriggerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\SchedulerOnDemandRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SchedulerOnDemand(\ChargeHive\Api\Grpc\SchedulerOnDemandRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/SchedulerOnDemand',
        $argument,
        ['\ChargeHive\Api\Grpc\SchedulerOnDemandResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChargeCreate(\ChargeHive\Api\Grpc\ChargeCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeCreate',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeCreateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeSummaryRetrieveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChargeSummaryRetrieve(\ChargeHive\Api\Grpc\ChargeSummaryRetrieveRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeSummaryRetrieve',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeSummaryRetrieveResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeModifyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChargeModify(\ChargeHive\Api\Grpc\ChargeModifyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeModify',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeModifyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeAuthorizeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChargeAuthorize(\ChargeHive\Api\Grpc\ChargeAuthorizeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeAuthorize',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeAuthorizeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeCaptureRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChargeCapture(\ChargeHive\Api\Grpc\ChargeCaptureRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeCapture',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeCaptureResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeRefundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChargeRefund(\ChargeHive\Api\Grpc\ChargeRefundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeRefund',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeRefundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeCancelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChargeCancel(\ChargeHive\Api\Grpc\ChargeCancelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeCancel',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeCancelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeFraudScanRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChargeFraudScan(\ChargeHive\Api\Grpc\ChargeFraudScanRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeFraudScan',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeFraudScanResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeSuspendRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChargeSuspend(\ChargeHive\Api\Grpc\ChargeSuspendRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeSuspend',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeSuspendResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\ChargeResumeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChargeResume(\ChargeHive\Api\Grpc\ChargeResumeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/ChargeResume',
        $argument,
        ['\ChargeHive\Api\Grpc\ChargeResumeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\MethodUnlockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MethodUnlock(\ChargeHive\Api\Grpc\MethodUnlockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/MethodUnlock',
        $argument,
        ['\ChargeHive\Api\Grpc\MethodUnlockResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\MethodUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MethodUpdate(\ChargeHive\Api\Grpc\MethodUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/MethodUpdate',
        $argument,
        ['\ChargeHive\Api\Grpc\MethodUpdateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\MethodVerifyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MethodVerify(\ChargeHive\Api\Grpc\MethodVerifyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/MethodVerify',
        $argument,
        ['\ChargeHive\Api\Grpc\MethodVerifyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\MethodSuspendRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MethodSuspend(\ChargeHive\Api\Grpc\MethodSuspendRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/MethodSuspend',
        $argument,
        ['\ChargeHive\Api\Grpc\MethodSuspendResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\MethodArchiveRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MethodArchive(\ChargeHive\Api\Grpc\MethodArchiveRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/MethodArchive',
        $argument,
        ['\ChargeHive\Api\Grpc\MethodArchiveResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MethodAvailableUpdateSchemas(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/MethodAvailableUpdateSchemas',
        $argument,
        ['\ChargeHive\Api\Grpc\SupportedMethodUpdateTypes', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\MethodTokenizeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MethodTokenize(\ChargeHive\Api\Grpc\MethodTokenizeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/MethodTokenize',
        $argument,
        ['\ChargeHive\Api\Grpc\MethodTokenizeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \ChargeHive\Api\Grpc\MethodRefreshRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MethodRefresh(\ChargeHive\Api\Grpc\MethodRefreshRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/MethodRefresh',
        $argument,
        ['\ChargeHive\Api\Grpc\MethodRefreshResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TransportKeyRetrieve(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/chargehive.ChargeHive/TransportKeyRetrieve',
        $argument,
        ['\ChargeHive\Api\Grpc\TransportKeyRetrieveResponse', 'decode'],
        $metadata, $options);
    }

}
