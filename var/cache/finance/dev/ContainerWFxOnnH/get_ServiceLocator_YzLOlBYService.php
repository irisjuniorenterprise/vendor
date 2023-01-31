<?php

namespace ContainerWFxOnnH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YzLOlBYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yzLOlBY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yzLOlBY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'imageRepository' => ['privates', 'App\\Repository\\ImageRepository', 'getImageRepositoryService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'imageRepository' => 'App\\Repository\\ImageRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
