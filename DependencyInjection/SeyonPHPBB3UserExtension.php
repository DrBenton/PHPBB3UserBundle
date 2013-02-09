<?
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
     
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('config.yml');
    }
    
    public function load(array $configs, ContainerBuilder $container)
    {
        
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        
    }

}