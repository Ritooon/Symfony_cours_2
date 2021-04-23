<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="continents")
     */
    public function index(ContinentRepository $repo): Response
    {
        return $this->render('continent/continents.html.twig', [
            'continents' => $repo->findAll()
        ]);
    }

    /**
     * @Route("/continent/{id}", name="afficher_continent")
     */
    public function afficherFamille(Continent $continent): Response
    {
        return $this->render('continent/afficherContinent.html.twig', [
            'continent' => $continent
        ]);
    }
}
