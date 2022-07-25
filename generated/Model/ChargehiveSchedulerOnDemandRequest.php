<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveSchedulerOnDemandRequest
{
    /**
     * 
     *
     * @var string
     */
    protected $schedulerId;
    /**
     * 
     *
     * @return string
     */
    public function getSchedulerId() : string
    {
        return $this->schedulerId;
    }
    /**
     * 
     *
     * @param string $schedulerId
     *
     * @return self
     */
    public function setSchedulerId(string $schedulerId) : self
    {
        $this->schedulerId = $schedulerId;
        return $this;
    }
}