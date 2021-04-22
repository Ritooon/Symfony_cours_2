<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $f1  = new Famille();
        $f1->setLibelle('Mammifères')
            ->setDescription('Animal vertébré, à température constante, respirant par des poumons, à système nerveux central développé, dont les femelles portent des mamelles.');
        $manager->persist($f1);

        $f2  = new Famille();
        $f2->setLibelle('Reptiles')
            ->setDescription('Le nom reptiles désigne des animaux à température variable, au corps souvent allongé et recouvert d\'écailles, et dont la démarche, pattes écartées et corps proche du sol, est proche de la reptation.');
        $manager->persist($f2);

        $f3  = new Famille();
        $f3->setLibelle('Poissons')
            ->setDescription('es poissons sont des animaux vertébrés aquatiques à branchies, pourvus de nageoires et dont le corps est le plus souvent couvert d\'écailles. ');
        $manager->persist($f3);

        $a1 = new Animal();
        $a1->setNom('Chien')
            ->setDescription('Un animal domestique')
            ->setImage('chien.png')
            ->setPoids(15)
            ->setDangereux(false)
            ->setFamille($f1)
        ;
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Serpent')
            ->setDescription('Un animal dangereux')
            ->setImage('serpent.png')
            ->setPoids(5)
            ->setDangereux(true)
            ->setFamille($f2)
        ;
        $manager->persist($a2);
        
        $a3 = new Animal();
        $a3->setNom('Crocodile')
            ->setDescription('Un animal très dangereux')
            ->setImage('crocodile.png')
            ->setPoids(500)
            ->setDangereux(true)
            ->setFamille($f2)
        ;
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('Requin')
            ->setDescription('Un animal marin très dangereux')
            ->setImage('requin.png')
            ->setPoids(700)
            ->setDangereux(true)
            ->setFamille($f3)
        ;
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Cochon')
            ->setDescription('Un animal d\'élevage')
            ->setImage('cochon.png')
            ->setPoids(5)
            ->setDangereux(false)
            ->setFamille($f1)
        ;
        $manager->persist($a5);
        //
        $manager->flush();
    }
}
