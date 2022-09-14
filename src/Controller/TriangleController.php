<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Triangle;
class TriangleController extends AbstractController
{
    #[Route('/triangle/{a}/{b}/{c}', name: 'app_triangle')]
    public function triangle(int $a, int $b, int $c): JsonResponse
    {
        $triangle = new Triangle;
        $circumference = $triangle->calculate_circumference($a,$b,$c); // sides of Triangle

        $surface = $triangle->calculate_surface($a, $b);  
    
        return $this->json([
            'type' => "triangle",
            'a' => $a,// Side A
            'b' => $b,// Height b
            'c' => $c,// Side C
            'surface' => $surface,
            'circumference' => $circumference
        ]);
    }
}
