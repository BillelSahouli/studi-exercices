<?php

namespace Container1mFlC1K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPerformanceTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\PerformanceType' shared autowired service.
     *
     * @return \App\Form\PerformanceType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\PerformanceType'] = new \App\Form\PerformanceType();
    }
}
