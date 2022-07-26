<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveMethodSuspendRequest implements \JsonSerializable
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
    public function getToken()
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
    public function setToken(string $token)
    {
        $this->token = $token;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['token' => $this->token];
    }
}