<?php

// src/AppBundle/Command/CreateUserCommand.php
namespace Maalls\HeisigBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
//use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Maalls\HeisigBundle\Entity\Heisig;

class DbLoadCommand extends ContainerAwareCommand
{

    public function __construct(\Doctrine\Common\Persistence\ObjectManager $em)
    {

        $this->em = $em;
        parent::__construct();

    }

    protected function configure()
    {
         $this
            ->setName('maalls:heisig:db:load')
            ->setDescription('Processing tweet pool.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        
        $cards = json_decode(file_get_contents(__dir__ . "/../Data/heisig.json"), true);
        $rep = $this->em->getRepository(Heisig::class);

        foreach($cards as $card) {

            $output->writeln($card["id"] . ": " . $card["kanji"]);
            $heisig = $rep->find($card["id"]);

            if(!$heisig) {

                $heisig = new Heisig();

                foreach($card as $field => $value) {

                    $method = "set" . ucfirst($field);
                    $heisig->$method($value);

                }

                $this->em->persist($heisig);
                $this->em->flush();

            }

        }




    }

}