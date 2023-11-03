<?php

namespace Example\Entities;

use Example\Interfaces\CanCalculateArea;

class Square implements CanCalculateArea
{
    private float $width;

    public function __construct(float $width)
    {
        $this->width = $width;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->width;
    }
}