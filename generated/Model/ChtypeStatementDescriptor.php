<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeStatementDescriptor implements \JsonSerializable
{
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
    protected $phone;
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
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['message' => $this->message, 'phone' => $this->phone];
    }
}