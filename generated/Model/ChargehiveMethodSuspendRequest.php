<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodSuspendRequest
{
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * 
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->token = $token;
        return $this;
    }
}