<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConfigurationGetResponse implements \JsonSerializable
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
    public function getConfigurationItem()
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
    public function setConfigurationItem(string $configurationItem)
    {
        $this->configurationItem = $configurationItem;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['configurationItem' => $this->configurationItem];
    }
}