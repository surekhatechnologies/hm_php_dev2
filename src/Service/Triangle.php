<?php

namespace App\Services;

class Triangle  extends CalculateAreaSize implements AttributeService, TypeService
{

    public $a_radius;
    public $b;
    public $c;

    public function __construct()
    {
    }

    public function setAttributes($a_radius, $b, $c){
        $this->a_or_radius = $a_radius;
        $this->b = $b;
        $this->c = $c;
    }

    public function getType(): string
    {
        return "triangle";
    }

    public function getAttributes(): array
    {
        return [
            "a" => $this->a_radius,
            "b" => $this->b,
            "c" => $this->c,
        ];
    }

    public function computeArea(): float|int
    {
        return ($this->b * $this->a_radius)/2;
    }

    public function computeCircumference(): float|int
    {
        return $this->a_radius + $this->b + $this->c;
    }
}