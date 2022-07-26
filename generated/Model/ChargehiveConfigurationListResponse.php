<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChargehiveConfigurationListResponse implements \JsonSerializable
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
    public function getItems()
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
    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['items' => $this->items];
    }
}