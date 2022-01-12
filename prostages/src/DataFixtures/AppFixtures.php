<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Entreprise

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $Airbuse = new Entreprise();
        // $manager->persist($product);

        $manager->flush();
    }
}
