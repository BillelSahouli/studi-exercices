<?php

namespace Container1mFlC1K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExerciceRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ExerciceRepository' shared autowired service.
     *
     * @return \App\Repository\ExerciceRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ExerciceRepository'] = new \App\Repository\ExerciceRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}