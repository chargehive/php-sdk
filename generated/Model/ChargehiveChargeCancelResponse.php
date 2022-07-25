<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveChargeCancelResponse
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
    public function getCancelSuccess() : bool
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
    public function setCancelSuccess(bool $cancelSuccess) : self
    {
        $this->cancelSuccess = $cancelSuccess;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCancelResult() : string
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
    public function setCancelResult(string $cancelResult) : self
    {
        $this->cancelResult = $cancelResult;
        return $this;
    }
}