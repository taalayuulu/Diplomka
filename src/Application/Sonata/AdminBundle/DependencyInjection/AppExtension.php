<?php

/**
 * Created by PhpStorm.
 * User: kanat
 * Date: 4/21/16
 * Time: 7:30 PM
 */
namespace Application\Sonata\AdminBundle;

use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Config\FileLocator;

class AppExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        // ...
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        // ...
        $loader->load('admin.yml');
    }
}