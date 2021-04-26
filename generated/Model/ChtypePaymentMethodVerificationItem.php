<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePaymentMethodVerificationItem implements \JsonSerializable
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
     * @return string
     */
    public function getType()
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
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValue()
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
    public function setValue(string $value)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransportKeyId()
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
    public function setTransportKeyId(string $transportKeyId)
    {
        $this->transportKeyId = $transportKeyId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsError()
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
    public function setIsError(bool $isError)
    {
        $this->isError = $isError;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['type' => $this->type, 'value' => $this->value, 'transportKeyId' => $this->transportKeyId, 'isError' => $this->isError];
    }
}