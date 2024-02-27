<?php

return [
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Rapsys\PackBundle\RapsysPackBundle::class => ['all' => true],
    Rapsys\UserBundle\RapsysUserBundle::class => ['all' => true],
    Rapsys\AirBundle\RapsysAirBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
];
