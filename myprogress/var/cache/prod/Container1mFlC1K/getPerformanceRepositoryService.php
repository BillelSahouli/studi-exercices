<?php

namespace Container1mFlC1K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPerformanceRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PerformanceRepository' shared autowired service.
     *
     * @return \App\Repository\PerformanceRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PerformanceRepository'] = new \App\Repository\PerformanceRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
