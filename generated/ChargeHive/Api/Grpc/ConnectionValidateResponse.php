<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace ChargeHive\Api\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>chargehive.ConnectionValidateResponse</code>
 */
class ConnectionValidateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string request_id = 1;</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>string verification_key = 2;</code>
     */
    protected $verification_key = '';
    /**
     * Generated from protobuf field <code>.chargehive.chtype.ResponseDetail response = 3;</code>
     */
    protected $response = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *     @type string $verification_key
     *     @type \ChargeHive\Chtype\ResponseDetail $response
     * }
     */
    public function __construct($data = NULL) {
        \ChargeHive\Api\Grpc\Metadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string verification_key = 2;</code>
     * @return string
     */
    public function getVerificationKey()
    {
        return $this->verification_key;
    }

    /**
     * Generated from protobuf field <code>string verification_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVerificationKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->verification_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.chargehive.chtype.ResponseDetail response = 3;</code>
     * @return \ChargeHive\Chtype\ResponseDetail|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function hasResponse()
    {
        return isset($this->response);
    }

    public function clearResponse()
    {
        unset($this->response);
    }

    /**
     * Generated from protobuf field <code>.chargehive.chtype.ResponseDetail response = 3;</code>
     * @param \ChargeHive\Chtype\ResponseDetail $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \ChargeHive\Chtype\ResponseDetail::class);
        $this->response = $var;

        return $this;
    }

}

