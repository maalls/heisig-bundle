<?php

// src/Acme/TestBundle/AcmeTestBundle.php
namespace Maalls\HeisigBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Maalls\HeisigBundle\DependencyInjection\MaallsHeisigExtension;

class HeisigBundle extends Bundle
{


    public function getContainerExtension()
    {
        return new MaallsHeisigExtension();
    }
}