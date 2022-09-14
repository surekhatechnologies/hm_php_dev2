<?php

namespace App\Controller\Api;

use Throwable;
use App\Services\CalculateAreaSize;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class CaculateAreaCircumferenceController extends AbstractController
{
    #[Route('/api/caculate/area/circumference/{figure}/{a_radius}/{b}/{c}', name: 'app_api_caculate_area_circumference')]
    public function index(): Response
    {
        return $this->render('api/caculate_area_circumference/index.html.twig', [
            'controller_name' => 'CaculateAreaCircumferenceController',
        ]);
    }
    public function figure($figure, $a_radius = null, $b = null, $c = null): Response
    {
        try {
            $figure = CalculateAreaSize::getInstance($figure);
            $figure->setAttributes($a_radius, $b, $c);
            $circumference = $figure->circumference();
            $surface = $figure->surface();

            $response = [
                "message" => "success",
                "data" => array_merge($figure->getAttributes(), [
                    "type" => $figure->getType(),
                    "surface" => $surface,
                    "circumference" => $circumference,
                ])
            ];

            return new JsonResponse($response);
        } catch (Throwable $throwable) {
            $response = [
                "message" => $throwable->getMessage(),
                "data" => null
            ];
            return new JsonResponse($response);
        }
    }
}
