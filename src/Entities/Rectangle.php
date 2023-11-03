<?php

namespace Example\Entities;

use Example\Interfaces\CanCalculateArea;

class Rectangle implements CanCalculateArea
{
    private float $width;
    private float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}