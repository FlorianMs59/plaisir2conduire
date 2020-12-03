<?php

namespace App\DataFixtures;

use App\Entity\Vehicules;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VoitureFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $v1 = new Vehicules();
        $v1->setMarque('Peugeot')
            ->setModele('208')
            ->setPhoto('208.png')
            ->setPuissance(110)
            ->setDescription('Voiture compact, agréable manipulation en agglomération')
            ->setCategorie('Vhl léger')
            ->setTypeDePermis('B');
        $manager->persist($v1);

        $v2 = new Vehicules();
        $v2->setMarque('Renault')
            ->setModele('Mégane Cabriolet')
            ->setPhoto('megane.png')
            ->setPuissance(136)
            ->setDescription('Voiture plaisir, pour les longue balade au soleil')
            ->setCategorie('Vhl léger')
            ->setTypeDePermis('B');
        $manager->persist($v2);

        $v3 = new Vehicules();
        $v3->setMarque('BMW')
            ->setModele('Série 1 (120d)')
            ->setPhoto('120d.png')
            ->setPuissance(185)
            ->setDescription('Voiture plaisir, bon compromis puissance/plaisir et faible consommation')
            ->setCategorie('Vhl léger')
            ->setTypeDePermis('B');
        $manager->persist($v3);


        
        $manager->flush();
    }
}
