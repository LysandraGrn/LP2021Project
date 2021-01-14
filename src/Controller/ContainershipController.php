<?php

namespace App\Controller;

use App\Entity\Containership;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContainershipController extends AbstractController
{
    /**
     * @Route("/containership", name="containershipList" , methods={"GET"})
     */
    public function containershipList()
    {
        return $this->json($this->getDoctrine()->getRepository(Containership::class)->findAll());
    }

    /**
     * @Route("/containership/{id}", name="containershipById" , methods={"GET"})
     * @param $id
     * @return JsonResponse
     */
    public function containershipById(int $id)
    {
        return $this->json($this->getDoctrine()->getRepository(Containership::class)->find($id));
    }
}
