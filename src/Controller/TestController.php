<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController {

    #[Route('/test_page')]
    public function mainInit(): Response {


        return $this->render('test_page.html.twig', [

        ]);

    }
}