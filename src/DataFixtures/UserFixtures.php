<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        // $manager->flush();
        $user =new  App\Entity\Models\Users;

        $user->fname = 'Amr';
        $user->lname = 'muhamed';
        $user->username = 'amrmuhamed';
        $user->email = 'mail@mail.com';
        $user->roles = ['ROLE_USER'];
        $user->setPassword($this->passwordEncoder->encodePassword(
             $user,
             '12345678'
         ));
    }
}
