<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeVerificationResult
{
    /**
     * 
     *
     * @var string
     */
    protected $addressVerificationResult;
    /**
     * 
     *
     * @var string
     */
    protected $cvvVerificationResult;
    /**
     * 
     *
     * @var string
     */
    protected $fraudResult;
    /**
     * 
     *
     * @var ChtypeThreeDSResult
     */
    protected $threedsResult;
    /**
     * 
     *
     * @return string
     */
    public function getAddressVerificationResult() : string
    {
        return $this->addressVerificationResult;
    }
    /**
     * 
     *
     * @param string $addressVerificationResult
     *
     * @return self
     */
    public function setAddressVerificationResult(string $addressVerificationResult) : self
    {
        $this->addressVerificationResult = $addressVerificationResult;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCvvVerificationResult() : string
    {
        return $this->cvvVerificationResult;
    }
    /**
     * 
     *
     * @param string $cvvVerificationResult
     *
     * @return self
     */
    public function setCvvVerificationResult(string $cvvVerificationResult) : self
    {
        $this->cvvVerificationResult = $cvvVerificationResult;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFraudResult() : string
    {
        return $this->fraudResult;
    }
    /**
     * 
     *
     * @param string $fraudResult
     *
     * @return self
     */
    public function setFraudResult(string $fraudResult) : self
    {
        $this->fraudResult = $fraudResult;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeThreeDSResult
     */
    public function getThreedsResult() : ChtypeThreeDSResult
    {
        return $this->threedsResult;
    }
    /**
     * 
     *
     * @param ChtypeThreeDSResult $threedsResult
     *
     * @return self
     */
    public function setThreedsResult(ChtypeThreeDSResult $threedsResult) : self
    {
        $this->threedsResult = $threedsResult;
        return $this;
    }
}