<?php

namespace Container6ZE8nKM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NsrUy3YService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NsrUy3Y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NsrUy3Y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blame' => ['privates', '.errored..service_locator.NsrUy3Y.App\\Entity\\Blame', NULL, 'Cannot autowire service ".service_locator.NsrUy3Y": it references class "App\\Entity\\Blame" but no such service exists.'],
            'blameRepository' => ['privates', 'App\\Repository\\BlameRepository', 'getBlameRepositoryService', true],
        ], [
            'blame' => 'App\\Entity\\Blame',
            'blameRepository' => 'App\\Repository\\BlameRepository',
        ]);
    }
}