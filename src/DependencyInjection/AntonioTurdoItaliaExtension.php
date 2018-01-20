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
        $loader = new \Symfony\Component\DependencyInjection\Loader\YamlFileLoader(
            $container,
            new \Symfony\Component\Config\FileLocator(__DIR__.'/../Resources/config')
        );
        //$loader->load('antonioturdo_italia.yaml');  
        $loader->load('services.yaml');
    }

}
