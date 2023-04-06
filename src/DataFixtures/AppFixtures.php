<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Project;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            // Ajoute des livres à la base de données
            $project = new Project();
            $project->setTitle('Project ' . $i)
                ->setDescription('lorem ipsum')
                ->setImage('Lorem Ipsum');
            $manager->persist($project);

        $manager->flush();
    }
}
}