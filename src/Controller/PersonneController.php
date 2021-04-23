<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonneController extends AbstractController
{
    /**
     * @Route("/personne/{id}", name="afficher_personne")
     */
    public function afficherPersonne(Personne $personne): Response
    {
        return $this->render('personne/personne.html.twig', [
            'personne' => $personne
        ]);
    }

    /**
     * @Route("/personnes", name="personnes")
     */
    public function index(PersonneRepository $repo): Response
    {
        return $this->render('personne/personnes.html.twig', [
            'personnes' => $repo->findAll()
        ]);
    }
}
