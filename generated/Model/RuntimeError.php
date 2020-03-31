<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class RuntimeError implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $error;
    /**
     * 
     *
     * @var int
     */
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var ProtobufAny[]
     */
    protected $details;
    /**
     * 
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param int $code
     *
     * @return self
     */
    public function setCode(int $code)
    {
        $this->code = $code;
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
     * @return ProtobufAny[]
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param ProtobufAny[] $details
     *
     * @return self
     */
    public function setDetails(array $details)
    {
        $this->details = $details;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['error' => $this->error, 'code' => $this->code, 'message' => $this->message, 'details' => $this->details];
    }
}