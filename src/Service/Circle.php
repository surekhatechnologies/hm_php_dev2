<?php
namespace App\Services;

abstract class Circle  extends CalculateAreaSize implements AttributeService, TypeService
{

    public function __construct()
    {
    }

    public function setAttributes($a_radius, $b, $c){
        $this->a_or_radius = $a_radius;
    }

    public function getType(): string
    {
        return "circle";
    }

    public function getAttributes(): array
    {
        return [
            "radius" => $this->a_radius,
        ];
    }

    public function computeArea(): float|int
    {
        return pi() * ($this->a_radius * $this->a_radius);
    }

    public function computeCircumference(): float|int
    {
        return 2 * pi() * $this->a_radius;
    }
}