<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace ChargeHive\Api\Grpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>chargehive.MethodRefreshResponse</code>
 */
class MethodRefreshResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     */
    protected $success = false;
    /**
     * Generated from protobuf field <code>string err_message = 2;</code>
     */
    protected $err_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $success
     *     @type string $err_message
     * }
     */
    public function __construct($data = NULL) {
        \ChargeHive\Api\Grpc\Metadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string err_message = 2;</code>
     * @return string
     */
    public function getErrMessage()
    {
        return $this->err_message;
    }

    /**
     * Generated from protobuf field <code>string err_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->err_message = $var;

        return $this;
    }

}

