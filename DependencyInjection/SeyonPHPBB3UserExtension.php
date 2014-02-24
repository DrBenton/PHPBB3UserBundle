<?php
namespace Seyon\PHPBB3\UserBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;

class SeyonPHPBB3UserExtension extends Extension implements PrependExtensionInterface 
{
    
    public function prepend(ContainerBuilder $container)
    {
        
        
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
        
        $config = $container->getExtensionConfig('seyon_phpbb3_user');
        if(!isset($config[0]) || empty($config[0])){
            $loader->load('config.yml');
        }
        
        $doctrine = $container->getExtensionConfig('doctrine');
        if(!isset($doctrine[0]['dbal']['connections']['seyon_phpbb3'])){
            $loader->load('doctrine_dbal.yml');
        }

        if(!isset($doctrine[0]['orm']['entity_managers']['seyon_phpbb3'])){
            $loader->load('doctrine_orm.yml');
        }
        
    }
    
    public function load(array $configs, ContainerBuilder $container)
    {
        $config = array();
        
        // reverse array, 
        // the main config file is the first but we will that 
        // the config part from the main will be used
        $configs = array_reverse($configs);
        foreach ($configs as $subConfig) {
            $config = array_merge($config, $subConfig);
        }
      
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, array($config));

        $container->setParameter('seyon_phpbb3_user', $config);
        
    }

}
