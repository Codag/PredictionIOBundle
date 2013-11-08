<?php
/*
 * This file is part of the PredictionIO package.
 *
 * (c) Marc Juchli <mail@marcjuch.li>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Codag\PredictionIOBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;


class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     * @return treeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('prediction_io');

        $rootNode->children()
            ->scalarNode('app_key')
                ->isRequired()
                ->cannotBeEmpty()
            ->end()
            ->scalarNode('api_url')
                ->defaultValue(null)
            ->end()
        ->end();

        return $treeBuilder;
    }
}
