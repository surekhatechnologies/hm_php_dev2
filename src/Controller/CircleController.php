<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Circle;
class CircleController extends AbstractController
{
    #[Route('/circle/{radius}', name: 'app_circle')]
    public function circle(int $radius): JsonResponse
    {
        $circle = new Circle;
        $circumference = $circle->calculate_circumference($radius); 

        $surface = $circle->calculate_surface($radius);
        return $this->json([
            'type' => "circle",
            'radius' => $radius,
            'surface' => $surface,
            'circumference' => $circumference
        ]);
    }
}
