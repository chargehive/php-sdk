<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeAddress
{
    /**
     * 
     *
     * @var string
     */
    protected $lineOne;
    /**
     * 
     *
     * @var string
     */
    protected $lineTwo;
    /**
     * 
     *
     * @var string
     */
    protected $lineThree;
    /**
     * 
     *
     * @var string
     */
    protected $town;
    /**
     * 
     *
     * @var string
     */
    protected $county;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var string
     */
    protected $postalCode;
    /**
     * 
     *
     * @var string
     */
    protected $fao;
    /**
     * 
     *
     * @var string
     */
    protected $companyName;
    /**
     * 
     *
     * @return string
     */
    public function getLineOne() : string
    {
        return $this->lineOne;
    }
    /**
     * 
     *
     * @param string $lineOne
     *
     * @return self
     */
    public function setLineOne(string $lineOne) : self
    {
        $this->lineOne = $lineOne;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLineTwo() : string
    {
        return $this->lineTwo;
    }
    /**
     * 
     *
     * @param string $lineTwo
     *
     * @return self
     */
    public function setLineTwo(string $lineTwo) : self
    {
        $this->lineTwo = $lineTwo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLineThree() : string
    {
        return $this->lineThree;
    }
    /**
     * 
     *
     * @param string $lineThree
     *
     * @return self
     */
    public function setLineThree(string $lineThree) : self
    {
        $this->lineThree = $lineThree;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTown() : string
    {
        return $this->town;
    }
    /**
     * 
     *
     * @param string $town
     *
     * @return self
     */
    public function setTown(string $town) : self
    {
        $this->town = $town;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCounty() : string
    {
        return $this->county;
    }
    /**
     * 
     *
     * @param string $county
     *
     * @return self
     */
    public function setCounty(string $county) : self
    {
        $this->county = $county;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * 
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFao() : string
    {
        return $this->fao;
    }
    /**
     * 
     *
     * @param string $fao
     *
     * @return self
     */
    public function setFao(string $fao) : self
    {
        $this->fao = $fao;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * 
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->companyName = $companyName;
        return $this;
    }
}