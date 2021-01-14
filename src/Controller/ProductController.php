<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="productList" , methods={"GET"})
     */
    public function productList()
    {
        return $this->json($this->getDoctrine()->getRepository(Product::class)->findAll());
    }

    /**
     * @Route("/product/{id}", name="productById" , methods={"GET"})
     * @param $id
     * @return JsonResponse
     */
    public function productById(int $id)
    {
        return $this->json($this->getDoctrine()->getRepository(Product::class)->find($id));
    }
}
