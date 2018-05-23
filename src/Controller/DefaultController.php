<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 23.05.2018
 * Time: 17:34
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('Default/index.html.twig');
    }

    /**
     * @Route("/customer", name="customerpage")
     */
    public function customerAction()
    {
        return $this->render('Default/customer.html.twig');
    }

    /**
     * @Route("/seller", name="sellerpage")
     */
    public function sellerAction()
    {
        return $this->render('Default/seller.html.twig');
    }
}