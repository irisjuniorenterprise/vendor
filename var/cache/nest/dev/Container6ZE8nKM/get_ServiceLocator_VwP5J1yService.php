<?php

namespace Container6ZE8nKM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VwP5J1yService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vwP5J1y' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vwP5J1y'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blame' => ['privates', '.errored..service_locator.vwP5J1y.App\\Entity\\Blame', NULL, 'Cannot autowire service ".service_locator.vwP5J1y": it references class "App\\Entity\\Blame" but no such service exists.'],
        ], [
            'blame' => 'App\\Entity\\Blame',
        ]);
    }
}
