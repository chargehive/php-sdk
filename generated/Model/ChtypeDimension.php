<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeDimension implements \JsonSerializable
{
    /**
     * 
     *
     * @var int
     */
    protected $width;
    /**
     * 
     *
     * @var int
     */
    protected $height;
    /**
     * 
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * 
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width)
    {
        $this->width = $width;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height)
    {
        $this->height = $height;
        return $this;
    }
    public function jsonSerialize()
    {
        return ['width' => $this->width, 'height' => $this->height];
    }
}