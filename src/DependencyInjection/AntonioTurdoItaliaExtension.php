<?php

namespace AntonioTurdo\Bundle\ItaliaBundle\DependencyInjection;

/**
 * Description of AntonioTurdoItaliaExtension
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class AntonioTurdoItaliaExtension extends \Symfony\Component\HttpKernel\DependencyInjection\Extension
{
    //put your code here
    public function load(array $configs, \Symfony\Component\DependencyInjection\ContainerBuilder $container) {
        $loader = new \Symfony\Component\DependencyInjection\Loader\XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.xml');        
    }

}
