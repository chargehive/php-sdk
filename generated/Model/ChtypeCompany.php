<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeCompany implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * 
     *
     * @return string
     */
    public function getName()
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
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * 
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['name' => $this->name, 'email' => $this->email, 'phoneNumber' => $this->phoneNumber];
    }
}