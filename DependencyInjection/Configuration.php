<?php
/**
 * User: dje_O
 * Date: 19/05/2020.
 */

namespace Sheeptizent\LicornesBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        /*Build a tree with a root node which name provided as parameter*/
        $Tree = new TreeBuilder('sheeptizent_licornes_bundle');

        $root = $Tree->getRootNode()
            ->children()
            ->scalarNode('licornesExistent')->defaultTrue()->info('Croyez vous aux licornes?')
            ->end()
            ->integerNode('tailleDuTroupeau')->defaultValue(5)->info('De combien de licornes est composé le troupeau?')
            ->end()
            ->scalarNode('licornesTools')->defaultNull()->end()
            ->end();

        return $Tree;
    }
}
