<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use App\Entity\Personne;
use App\Entity\Continent;
use App\Entity\Dispose;
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
            ->setDescription('Les poissons sont des animaux vertébrés aquatiques à branchies, pourvus de nageoires et dont le corps est le plus souvent couvert d\'écailles. ');
        $manager->persist($f3);

        $c1 = new Continent();
        $c1->setLibelle('Europe');
        $manager->persist($c1);

        $c2 = new Continent();
        $c2->setLibelle('Amérique');
        $manager->persist($c2);

        $c3 = new Continent();
        $c3->setLibelle('Océanie');
        $manager->persist($c3);

        $c4 = new Continent();
        $c4->setLibelle('Asie');
        $manager->persist($c4);

        $c5 = new Continent();
        $c5->setLibelle('Afrique');
        $manager->persist($c5);
        
        $p1 = new Personne();
        $p1->setNom('Hector');
        $manager->persist($p1);

        $p2 = new Personne();
        $p2->setNom('Lena');
        $manager->persist($p2);

        $p3 = new Personne();
        $p3->setNom('Jean');
        $manager->persist($p3);

        $a1 = new Animal();
        $a1->setNom('Chien')
            ->setDescription('Un animal domestique')
            ->setImage('chien.png')
            ->setPoids(15)
            ->setDangereux(false)
            ->setFamille($f1)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c3)
            ->addContinent($c4)
            ->addContinent($c5)
        ;
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Serpent')
            ->setDescription('Un animal dangereux')
            ->setImage('serpent.png')
            ->setPoids(5)
            ->setDangereux(true)
            ->setFamille($f2)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c3)
            ->addContinent($c4)
            ->addContinent($c5)
        ;
        $manager->persist($a2);
        
        $a3 = new Animal();
        $a3->setNom('Crocodile')
            ->setDescription('Un animal très dangereux')
            ->setImage('crocodile.png')
            ->setPoids(500)
            ->setDangereux(true)
            ->setFamille($f2)
            ->addContinent($c2)
            ->addContinent($c3)
            ->addContinent($c5)
        ;
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('Requin')
            ->setDescription('Un animal marin très dangereux')
            ->setImage('requin.png')
            ->setPoids(700)
            ->setDangereux(true)
            ->setFamille($f3)
            ->addContinent($c2)
            ->addContinent($c3)
            ->addContinent($c4)
            ->addContinent($c5)
        ;
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Cochon')
            ->setDescription('Un animal d\'élevage')
            ->setImage('cochon.png')
            ->setPoids(5)
            ->setDangereux(false)
            ->setFamille($f1)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c3)
        ;
        $manager->persist($a5);
        //
        $d1 = new Dispose();
        $d1->setPersonne($p1)
            ->setAnimal($a1)
            ->setNb(5)
        ;
        $manager->persist($d1);

        $d2 = new Dispose();
        $d2->setPersonne($p1)
            ->setAnimal($a5)
            ->setNb(15)
        ;
        $manager->persist($d2);

        $d3 = new Dispose();
        $d3->setPersonne($p2)
            ->setAnimal($a3)
            ->setNb(20)
        ;
        $manager->persist($d3);

        $d4 = new Dispose();
        $d4->setPersonne($p3)
            ->setAnimal($a1)
            ->setNb(22)
        ;
        $manager->persist($d4);
        //
        $manager->flush();
    }
}
