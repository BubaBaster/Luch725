<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainPageController extends AbstractController {

    #[Route('/main_page')]
    public function mainInit(): Response {

        $companyName = "Луч725";

        return $this->render('main_page.html.twig', [
            'companyName' => $companyName,
        ]);

    }
}