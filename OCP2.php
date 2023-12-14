<?php

interface Shape {
    public function calculateArea();
}

class Rectangle implements Shape {
    public $width;
    public $height;

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
    public $radius;

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class AreaCalculator {
    public function calculateArea(array $shapes) {
        $area = 0;

        foreach ($shapes as $shape) {
            $area += $shape->calculateArea();
        }

        return $area;
    }
}