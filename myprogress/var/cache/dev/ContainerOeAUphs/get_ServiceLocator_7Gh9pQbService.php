<?php

namespace ContainerOeAUphs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7Gh9pQbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7Gh9pQb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7Gh9pQb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory', 'getActionFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory', 'getControllerFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory', 'getEntityFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory', 'getFilterFactoryService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory', 'getFormFactoryService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory', 'getPaginatorFactoryService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository', 'getEntityRepositoryService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater', 'getEntityUpdaterService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider', 'getAdminContextProviderService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider', 'getFieldProviderService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator', 'getAdminUrlGeneratorService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator', 'getCrudUrlGeneratorService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'form.factory' => ['services', '.container.private.form.factory', 'get_Container_Private_Form_FactoryService', true],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', '.container.private.security.csrf.token_manager', 'get_Container_Private_Security_Csrf_TokenManagerService', true],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'session' => ['services', 'session', 'getSessionService', true],
            'twig' => ['services', '.container.private.twig', 'get_Container_Private_TwigService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator',
            'doctrine' => '?',
            'event_dispatcher' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]);
    }
}
