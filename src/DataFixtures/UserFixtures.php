<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // alimentation bdd : php bin/console doctrine:fixtures:load
        // générer un mdp : php bin/console security:encode-password

        /**
         * Nom d'utilisateur => matteo
         * Mot de passe => matteo123
         * Rôle => ROLE_MANAGER
         */
        $userMatteo = new User();
        $userMatteo->setUsername("matteo");
        $userMatteo->setPassword('$argon2id$v=19$m=65536,t=4,p=1$BJWtri9t9pJIEyk6OiF2FQ$vbmdOzZ2djXtScK6Ft4vJzYMfcDdYEN/AlhL8sKbxyM');
        $manager->persist($userMatteo);
        $manager->flush();

        /**
         * Nom d'utilisateur => julien
         * Mot de passe => julien123
         * Rôle => ROLE_RECEPTIONNISTE
         */
        $userJulien = new User();
        $userJulien->setUsername("julien");
        $userJulien->setPassword('$argon2id$v=19$m=65536,t=4,p=1$lFX3UBJwoCTxNYXwrr5IUA$qhWTvCGPqTNF8wH5eafR0qp/2PjoiMUZXhzr0xxyCXE');
        $manager->persist($userJulien);
        $manager->flush();

        /**
         * Nom d'utilisateur => pierre
         * Mot de passe => pierre123
         * Rôle => ROLE_EMPLOYE
         */
        $userPierre = new User();
        $userPierre->setUsername("pierre");
        $userPierre->setPassword('$argon2id$v=19$m=65536,t=4,p=1$1rnz8rrK98hojYMycWQ9mw$HBoVaex1hYvH5c1Wc3K4FImHvdNSbUHc3bc3TXKi7og');
        $manager->persist($userPierre);
        $manager->flush();

        /**
         * Nom d'utilisateur => paul
         * Mot de passe => paul123
         * Rôle => ROLE_EMPLOYE
         */
        $userPierre = new User();
        $userPierre->setUsername("paul");
        $userPierre->setPassword('$argon2id$v=19$m=65536,t=4,p=1$E4k5qdxg6K0N0iLAwC/2Zw$lVx/CLg3ISdCYj8zJG2DHFHMtidXyJW4aX5Wqbj2YTI');
        $manager->persist($userPierre);
        $manager->flush();
    }
}
