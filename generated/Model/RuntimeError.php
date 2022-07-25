<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class RuntimeError
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
    public function getError() : string
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
    public function setError(string $error) : self
    {
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCode() : int
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
    public function setCode(int $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
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
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return ProtobufAny[]
     */
    public function getDetails() : array
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
    public function setDetails(array $details) : self
    {
        $this->details = $details;
        return $this;
    }
}