<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodRefreshResponse implements \JsonSerializable
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
     * @var string
     */
    protected $errMessage;
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
    /**
     * 
     *
     * @return string
     */
    public function getErrMessage()
    {
        return $this->errMessage;
    }
    /**
     * 
     *
     * @param string $errMessage
     *
     * @return self
     */
    public function setErrMessage(string $errMessage)
    {
        $this->errMessage = $errMessage;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['success' => $this->success, 'errMessage' => $this->errMessage];
    }
}