<?php

namespace App\Controller;

use App\Entity\Container;
use App\Entity\Containership;
use App\Entity\Product;
use http\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContainerController extends AbstractController
{
    /**
     * @Route("/container", name="containersList" , methods={"GET"})
     */
    public function containersList()
    {

        return $this->json($this->getDoctrine()->getRepository(Container::class)->findAll());
    }

    /**
     * @Route("/container/{id}", name="containersById" , methods={"GET"})
     * @param $id
     * @return JsonResponse
     */
    public function containersById(int $id)
    {
        return $this->json($this->getDoctrine()->getRepository(Container::class)->find($id));
    }

}
