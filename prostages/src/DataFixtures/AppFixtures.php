<?php

namespace App\DataFixtures;

use App\Entity\Stage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $Stage = new Stage();
        $Stage->setTitre("stage d'info");
        $Stage->setNom("Stage développeur");
        $Stage->setDetail("C'est un stage pour des développeur");
        $Stage->setEmail("mailEntreprise@mail.com");
        $manager->persist($Stage);

        $manager->flush();
    }
}
