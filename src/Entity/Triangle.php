<?php

namespace App\Entity;

use App\Repository\TriangleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TriangleRepository::class)]
class Triangle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    public function getId(): ?int
    {
        return $this->id;
    }
    public function calculate_circumference($a, $b, $c){
        $circumference = $a + $b + $c;
        return $circumference;
    }
    public function calculate_surface($a, $b){
        $surface = ($a * $b) / 2;
        return $surface;
    }
}
