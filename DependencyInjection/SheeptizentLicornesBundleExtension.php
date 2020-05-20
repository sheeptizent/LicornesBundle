<?php
/**
 * User: dje_O
 * Date: 15/05/2020.
 */

namespace Sheeptizent\LicornesBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use function array_merge;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class SheeptizentExchangePlatformExtension.
 */
class SheeptizentLicornesBundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        /*Load the services.xml configuration to load as definition*/
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );
        $loader->load('services.xml');

        /*Load configuration provide by the user*/
        $configuration = new Configuration();
        $processor = new Processor();
        $config = $processor->processConfiguration($configuration, $configs);

        /*And merge it with the other argument provide in the service.xml file*/
        $definition = $container->getDefinition('sheeptizent_licornes_bundle.home');
        if (null !== $config['licornesTools']) {
            /*new Reference("Namespace/dir/ClassName) allow to instanciate an object of type
            ClassName - Symfony*/
            /*Way of when the licornes argument is not an alias*/
       //  $definition->replaceArgument(1, new Reference($config['licornesTools']));
            $container->setAlias('sheeptizent_exchange_platform.tools', $config['licornesTools']);
        }
        $args = $definition->getArguments();

        $definition->setArguments(array_merge($args, [$config['licornesExistent'], $config['tailleDuTroupeau']]));

        /*Can invoke a callback method define in the class bind to the definition*/
        $definition->addMethodCall('salutationCachee', ['Salut licornes!']);

    }
}
