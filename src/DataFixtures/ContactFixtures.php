<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 30; $i++) {
            $contact = new Contact();
            $contact->setName($faker->name);
            $contact->setEmail($faker->email);
            $contact->setPhone($faker->phoneNumber);

            $manager->persist($contact);
        }

        $manager->flush();
    }
}
