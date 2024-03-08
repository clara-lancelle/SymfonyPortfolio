<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $hasher)
    {
    }
    public function load(ObjectManager $manager): void
    {
        $roles = ['ROLE_USER', 'ROLE_ADMIN'];

        // create admin user
        $user = new User();
        $user->setEmail('admin@hotmail.com');
        $password = $this->hasher->hashPassword($user, 'password');
        $user->setPassword($password);
        $user->setRoles($roles);
        $manager->persist($user);
        $manager->flush();

        //create not admin user
        $user = new User();
        $user->setEmail('user@hotmail.com');
        $password = $this->hasher->hashPassword($user, 'password');
        $user->setPassword($password);
        $user->setRoles(array($roles[0]));
        $manager->persist($user);
        $manager->flush();
    }
}
