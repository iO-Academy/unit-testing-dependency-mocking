<?php

namespace Example\Services;

use Example\Interfaces\CanCalculateArea;

class ShapeCalculator
{
    public static function calculateAreaOfShape(CanCalculateArea $shape): float
    {
        return $shape->calculateArea();
    }
}