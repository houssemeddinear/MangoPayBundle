<?php

namespace Houssrad\MangoPayBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class HoussradMangoPayExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        
        $container->setParameter('houssrad_mango_pay.api_factory_class', $config['api_factory_class']);
        $container->setParameter('houssrad_mango_pay.mangopay_id', $config['mangopay_id']);
        $container->setParameter('houssrad_mango_pay.mangopay_password', $config['mangopay_password']); 
        $container->setParameter('houssrad_mango_pay.mangopay_base_url', $config['mangopay_base_url']);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('config.yml');
    }
}
