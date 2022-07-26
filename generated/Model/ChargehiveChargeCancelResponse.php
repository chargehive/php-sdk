<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCancelResponse implements \JsonSerializable
{
    /**
     * 
     *
     * @var bool
     */
    protected $cancelSuccess;
    /**
     * 
     *
     * @var string
     */
    protected $cancelResult;
    /**
     * 
     *
     * @return bool
     */
    public function getCancelSuccess()
    {
        return $this->cancelSuccess;
    }
    /**
     * 
     *
     * @param bool $cancelSuccess
     *
     * @return self
     */
    public function setCancelSuccess(bool $cancelSuccess)
    {
        $this->cancelSuccess = $cancelSuccess;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCancelResult()
    {
        return $this->cancelResult;
    }
    /**
     * 
     *
     * @param string $cancelResult
     *
     * @return self
     */
    public function setCancelResult(string $cancelResult)
    {
        $this->cancelResult = $cancelResult;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['cancelSuccess' => $this->cancelSuccess, 'cancelResult' => $this->cancelResult];
    }
}