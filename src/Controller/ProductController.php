<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Product;

class ProductController extends Controller
{
    /**
     * @Route("/product", methods="GET")
     */
    public function listProducts()
    {
        return new JsonResponse([
            'result' => 'ok'
        ]);
    }
}
