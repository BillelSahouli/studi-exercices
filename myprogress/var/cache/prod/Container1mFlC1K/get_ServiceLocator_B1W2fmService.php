<?php

namespace Container1mFlC1K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B1W2fmService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.B1_W2fm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B1_W2fm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'performance' => ['privates', '.errored..service_locator.B1_W2fm.App\\Entity\\Performance', NULL, 'Cannot autowire service ".service_locator.B1_W2fm": it references class "App\\Entity\\Performance" but no such service exists.'],
        ], [
            'performance' => 'App\\Entity\\Performance',
        ]);
    }
}
