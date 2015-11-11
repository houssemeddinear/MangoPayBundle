<?php

namespace Houssrad\MangoPayBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('houssrad_mango_pay');

        $rootNode->children()
                    ->scalarNode('mangopay_id')->isRequired()->end()
                    ->scalarNode('mangopay_password')->isRequired()->end()
                    ->scalarNode('mangopay_base_url')->isRequired()->end()
                    ->scalarNode('api_factory_class')->defaultValue('Houssrad\\MangoPayBundle\\ApiFactory\\Api')->cannotBeEmpty()->end();

        return $treeBuilder;
    }
}
