<?php

namespace AntonioTurdo\Bundle\ItaliaBundle;

use Symfony\Component\Console\Application;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Bundle.
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class AntonioTurdoItaliaBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    public function registerCommands(Application $application)
    {
        // noop
    }
}

