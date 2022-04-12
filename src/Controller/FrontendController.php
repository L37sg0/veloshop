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
        return $this->render('veloshop/index.html.twig');
    }

    public function bikes(string $sku='') {
        if (empty($sku)) {
            return '...';
        }
        return [];
        // TODO implement Product Listing page
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