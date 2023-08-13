<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaintsPageController extends AbstractController {

    #[Route('/paints_page')]
    public function mainInit(): Response {

        return $this -> render('paints_page.html.twig');

    }

}