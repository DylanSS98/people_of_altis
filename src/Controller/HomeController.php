<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Subcategory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {


        $cat = $this->getDoctrine()->getRepository(Category::class)->findAll();


        return $this->render('home/index.html.twig', [
            'category' => $cat,
        ]);
    }

    /*
     * @Route("/sous_categorie/{slug}", name="subcat")
     */
    public function subcat($slug){
        $subcat = $this->getDoctrine()->getRepository(Subcategory::class)->findOneBy([
            'slug' => $slug
        ]);

        if (!$subcat){
            throw $this->createNotFoundException("cet section n'existe plus");
        }

        return $this->render("subcat/subcat.html.twig", compact('subcat'));
    }
}
