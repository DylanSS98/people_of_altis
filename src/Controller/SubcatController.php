<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubcatController extends AbstractController
{
    /**
     * @Route("/subcat", name="subcat")
     */
    public function index(): Response
    {
        return $this->render('subcat/index.html.twig', [
            'controller_name' => 'SubcatController',
        ]);
    }
}
