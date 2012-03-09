<?php

namespace App\MobileDetectorBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class AppMobileDetectorExtension extends Extension {

    public function load(array $config, ContainerBuilder $container){
        $locator = new FileLocator(__DIR__.'/../Resources/config');
       	$loader = new YamlFileLoader($container, $locator);
       	$loader->load('services.yml');
    }

}