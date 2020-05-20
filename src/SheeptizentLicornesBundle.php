<?php
/**
 * User: dje_O
 * Date: 15/05/2020.
 */

namespace Sheeptizent\LicornesBundle;

use Sheeptizent\LicornesBundle\DependencyInjection\SheeptizentLicornesExtension;
use Sheeptizent\LicornesBundle\DependencyInjection\CompilerPass\HomeControllerCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SheeptizentLicornesBundle extends Bundle
{
    /**
     * @return SheeptizentLicornesExtension
     */
    public function getContainerExtension()
    {
        return new SheeptizentLicornesExtension();
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
