<?php 

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class LuckyController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
    public function triangle(int $a, int $b, int $c): Response
    {
        $circumference = $a + $b + $c;

        $surface = ($a * $b) / 2;  
        return $this->render('triangle/triangle.html.twig', [
            'circumference' => $circumference,
            'surface' => $surface
        ]);
    }
}