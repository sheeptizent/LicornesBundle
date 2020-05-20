<?php
/**
 * User: dje_O
 * Date: 15/05/2020.
 */

namespace Sheeptizent\LicornesBundle;

use Sheeptizent\LicornesBundle\DependencyInjection\SheeptizentLicornesBundleExtension;
use Sheeptizent\LicornesBundle\DependencyInjection\CompilerPass\HomeControllerCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SheeptizentLicornesBundleBundle extends Bundle
{
    /**
     * @return bool|SheeptizentLicornesBundleExtension|\Symfony\Component\DependencyInjection\Extension\ExtensionInterface|null
     */
    public function getContainerExtension()
    {
        return new SheeptizentLicornesBundleExtension();
    }

    /**
     * Allow to add Custom CompilerPass Class
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new HomeControllerCompilerPass());
    }
}
