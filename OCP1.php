<?php

class Shape {
    public $type;

    public function __construct($type) {
        $this->type = $type;
    }
}

class AreaCalculator {
    public function calculateArea($shapes) {
        $area = 0;

        foreach ($shapes as $shape) {
            if ($shape->type == 'rectangle') {
                $area += $shape->width * $shape->height;
            } elseif ($shape->type == 'circle') {
                $area += pi() * pow($shape->radius, 2);
            }
            // Нарушение принципа: при добавлении новой фигуры, нужно модифицировать этот класс
        }

        return $area;
    }
}
