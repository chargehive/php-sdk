<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodRefreshResponse
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
    public function getSuccess() : bool
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
    public function setSuccess(bool $success) : self
    {
        $this->success = $success;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getErrMessage() : string
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
    public function setErrMessage(string $errMessage) : self
    {
        $this->errMessage = $errMessage;
        return $this;
    }
}