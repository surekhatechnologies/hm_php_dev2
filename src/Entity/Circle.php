<?php

namespace App\Entity;

use App\Repository\CircleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CircleRepository::class)]
class Circle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function calculate_circumference($radius){
        $pi = 3.14;
        $circumference = 2*$pi*$radius;
        return $circumference;
    }
    public function calculate_surface($radius){
        $pi = 3.14;
        $sq_rad = $radius*$radius;
        $surface = $pi*$sq_rad;
        return $surface;
    }
}
