<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConfigurationListResponse
{
    /**
     * 
     *
     * @var ChargehiveConfigurationListItem[]
     */
    protected $items;
    /**
     * 
     *
     * @return ChargehiveConfigurationListItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param ChargehiveConfigurationListItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}