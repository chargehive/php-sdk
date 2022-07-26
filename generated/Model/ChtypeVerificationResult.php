<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeVerificationResult implements \JsonSerializable
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
    public function getAddressVerificationResult()
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
    public function setAddressVerificationResult(string $addressVerificationResult)
    {
        $this->addressVerificationResult = $addressVerificationResult;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCvvVerificationResult()
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
    public function setCvvVerificationResult(string $cvvVerificationResult)
    {
        $this->cvvVerificationResult = $cvvVerificationResult;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFraudResult()
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
    public function setFraudResult(string $fraudResult)
    {
        $this->fraudResult = $fraudResult;
        return $this;
    }
    /**
     * 
     *
     * @return ChtypeThreeDSResult
     */
    public function getThreedsResult()
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
    public function setThreedsResult(ChtypeThreeDSResult $threedsResult)
    {
        $this->threedsResult = $threedsResult;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['addressVerificationResult' => $this->addressVerificationResult, 'cvvVerificationResult' => $this->cvvVerificationResult, 'fraudResult' => $this->fraudResult, 'threedsResult' => $this->threedsResult];
    }
}