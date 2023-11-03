<?php

namespace Example\Entities;

use Example\Interfaces\CanCalculateArea;

class Circle implements CanCalculateArea
{
    private float $radius;
    const PI = 3.14159;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return self::PI * ($this->radius * $this->radius);
    }
}