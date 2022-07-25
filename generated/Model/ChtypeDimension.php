<?php

namespace ChargeHive\Php\Sdk\Generated\Model;

class ChtypeDimension
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
    public function getWidth() : int
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
    public function setWidth(int $width) : self
    {
        $this->width = $width;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeight() : int
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
    public function setHeight(int $height) : self
    {
        $this->height = $height;
        return $this;
    }
}