<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="landing")
     */
    public function index() {
        return $this->render('veloshop/pages/home.html.twig');
    }

    /**
     * @param string $sku
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/bikes", name="bikes")
     */
    public function bikes(string $sku='') {
        return $this->render('veloshop/pages/product.list.html.twig');
    }

    public function about() {
        // TODO implement About page
    }

    public function cart() {
        // TODO implement Cart page
    }

    public function checkout() {
        // TODO implement Checkout page
    }

}