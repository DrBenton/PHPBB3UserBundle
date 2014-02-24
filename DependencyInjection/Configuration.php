<?php
namespace Seyon\PHPBB3\UserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('seyon_phpbb3_user');

        $rootNode
            ->children()
                ->scalarNode('template') 
                    ->defaultValue('SeyonPHPBB3UserBundle::layout.html.twig')
                ->end()
                ->scalarNode('table_prefix')
                    ->defaultValue('phpbb3_')
                ->end()
                ->scalarNode('user_class')
                	->defaultValue('Seyon\PHPBB3\UserBundle\Entity\User')
                ->end()
                ->scalarNode('group_class')
                	->defaultValue('Seyon\PHPBB3\UserBundle\Entity\Group')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
