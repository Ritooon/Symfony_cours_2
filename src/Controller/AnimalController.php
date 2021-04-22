<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalController extends AbstractController
{
    /**
     * @Route("/", name="animaux")
     */
    public function index(AnimalRepository $repo): Response
    {
        $animaux = $repo->findAll();
        return $this->render('animal/animaux.html.twig',[
            'animaux' => $animaux
        ]);
    }

    /**
     * @Route("/animal/{id}", name="afficher_animal")
     */
    public function afficherAnimal(Animal $animal): Response
    {
        return $this->render('animal/afficherAnimal.html.twig',[
            'animal' => $animal
        ]);
    }
}
