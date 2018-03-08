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


    public function findBySentence($sentence)
    {

        $kanjis = \Maalls\HeisigBundle\Lib\Text::splitKanjis($sentence);

        $heisigs = $this->createQueryBuilder("h")
            ->where("h.kanji IN (:kanjis)")->setParameter("kanjis", $kanjis)
            ->getQuery()->getResult();


        return $heisigs;


    }

    

}