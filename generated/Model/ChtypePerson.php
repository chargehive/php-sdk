<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypePerson implements \JsonSerializable
{
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var string
     */
    protected $fullName;
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
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }
    /**
     * 
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName)
    {
        $this->fullName = $fullName;
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
    /**
     * 
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['title' => $this->title, 'firstName' => $this->firstName, 'lastName' => $this->lastName, 'fullName' => $this->fullName, 'email' => $this->email, 'phoneNumber' => $this->phoneNumber, 'language' => $this->language];
    }
}