<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConfigurationGetResponse
{
    /**
     * 
     *
     * @var string
     */
    protected $configurationItem;
    /**
     * 
     *
     * @return string
     */
    public function getConfigurationItem() : string
    {
        return $this->configurationItem;
    }
    /**
     * 
     *
     * @param string $configurationItem
     *
     * @return self
     */
    public function setConfigurationItem(string $configurationItem) : self
    {
        $this->configurationItem = $configurationItem;
        return $this;
    }
}