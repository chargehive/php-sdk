<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace ChargeHive\Api\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>chargehive.PCIBTokenizeResponse</code>
 */
class PCIBTokenizeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tokenID = 1;</code>
     */
    protected $tokenID = '';
    /**
     * Generated from protobuf field <code>string token = 2;</code>
     */
    protected $token = '';
    /**
     * Generated from protobuf field <code>string profileFingerprint = 3;</code>
     */
    protected $profileFingerprint = '';
    /**
     * Generated from protobuf field <code>string merchantFingerprint = 4;</code>
     */
    protected $merchantFingerprint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tokenID
     *     @type string $token
     *     @type string $profileFingerprint
     *     @type string $merchantFingerprint
     * }
     */
    public function __construct($data = NULL) {
        \ChargeHive\Api\Grpc\Metadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tokenID = 1;</code>
     * @return string
     */
    public function getTokenID()
    {
        return $this->tokenID;
    }

    /**
     * Generated from protobuf field <code>string tokenID = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTokenID($var)
    {
        GPBUtil::checkString($var, True);
        $this->tokenID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string profileFingerprint = 3;</code>
     * @return string
     */
    public function getProfileFingerprint()
    {
        return $this->profileFingerprint;
    }

    /**
     * Generated from protobuf field <code>string profileFingerprint = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProfileFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->profileFingerprint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string merchantFingerprint = 4;</code>
     * @return string
     */
    public function getMerchantFingerprint()
    {
        return $this->merchantFingerprint;
    }

    /**
     * Generated from protobuf field <code>string merchantFingerprint = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMerchantFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->merchantFingerprint = $var;

        return $this;
    }

}

