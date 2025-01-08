<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UsuarioFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=1; $i<=5; $i++)
        {
            $usuario = new Usuario();
            $usuario->setNombre('Usuario'. $i);
            $usuario->setEmail('usuario'. $i .'@gmail.com');
            $usuario->setPassword('123');
            $manager->persist($usuario);
        }
        
        $manager->flush();
    }
}
