<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeAddress implements \JsonSerializable
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
    public function getLineOne()
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
    public function setLineOne(string $lineOne)
    {
        $this->lineOne = $lineOne;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLineTwo()
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
    public function setLineTwo(string $lineTwo)
    {
        $this->lineTwo = $lineTwo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLineThree()
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
    public function setLineThree(string $lineThree)
    {
        $this->lineThree = $lineThree;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTown()
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
    public function setTown(string $town)
    {
        $this->town = $town;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCounty()
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
    public function setCounty(string $county)
    {
        $this->county = $county;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry()
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
    public function setCountry(string $country)
    {
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostalCode()
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
    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFao()
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
    public function setFao(string $fao)
    {
        $this->fao = $fao;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyName()
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
    public function setCompanyName(string $companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['lineOne' => $this->lineOne, 'lineTwo' => $this->lineTwo, 'lineThree' => $this->lineThree, 'town' => $this->town, 'county' => $this->county, 'country' => $this->country, 'postalCode' => $this->postalCode, 'fao' => $this->fao, 'companyName' => $this->companyName];
    }
}