<?php

namespace Maalls\HeisigBundle\Repository;

use Maalls\HeisigBundle\Entity\Heisig;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class HeisigRepository extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Heisig::class);

    }

    

}