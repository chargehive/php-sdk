<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveSchedulerOnDemandTriggerRequest implements \JsonSerializable
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
    public function getSchedulerId()
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
    public function setSchedulerId(string $schedulerId)
    {
        $this->schedulerId = $schedulerId;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['schedulerId' => $this->schedulerId];
    }
}