<?php
/**
 * User: dje_O
 * Date: 18/05/2020.
 */

namespace Sheeptizent\LicornesBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use function array_unshift;

/**
 * Class HomeControllerCompilerPass
 * Can add logic in here
 * @package Sheeptizent\ExchangePlatform\DependencyInjection\CompilerPass
 */
class HomeControllerCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if ($container->hasParameter('twig.form.resources')) {
            $resources = $container->getParameter('twig.form.resources') ?: [];
            array_unshift($resources, '@LicornesBundle/form.html.twig');
            $container->setParameter('twig.form.resources', $resources);
        }
    }
}
