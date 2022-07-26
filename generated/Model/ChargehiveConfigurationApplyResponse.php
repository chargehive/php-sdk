<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConfigurationApplyResponse implements \JsonSerializable
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
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $result;
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
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * 
     *
     * @param string $result
     *
     * @return self
     */
    public function setResult(string $result)
    {
        $this->result = $result;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['success' => $this->success, 'message' => $this->message, 'result' => $this->result];
    }
}