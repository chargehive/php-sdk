<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeModifyResponse implements \JsonSerializable
{
    /**
     * 
     *
     * @var bool
     */
    protected $success;
    /**
     * 
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }
    /**
     * 
     *
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess(bool $success)
    {
        $this->success = $success;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['success' => $this->success];
    }
}