<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePaymentMethodVerificationItem
{
    /**
     * 
     *
     * @var string
     */
    protected $type = 'PAYMENT_METHOD_VERIFICATION_ITEM_TYPE_INVALID';
    /**
     * 
     *
     * @var string
     */
    protected $value;
    /**
     * 
     *
     * @var string
     */
    protected $transportKeyId;
    /**
     * 
     *
     * @var bool
     */
    protected $isError;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransportKeyId() : string
    {
        return $this->transportKeyId;
    }
    /**
     * 
     *
     * @param string $transportKeyId
     *
     * @return self
     */
    public function setTransportKeyId(string $transportKeyId) : self
    {
        $this->transportKeyId = $transportKeyId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsError() : bool
    {
        return $this->isError;
    }
    /**
     * 
     *
     * @param bool $isError
     *
     * @return self
     */
    public function setIsError(bool $isError) : self
    {
        $this->isError = $isError;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}