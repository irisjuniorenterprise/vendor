<?php

namespace ContainerT282qzJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DhnXty3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dhnXty3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dhnXty3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\finance\\LoginController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\finance\\ProductController::addImages' => ['privates', '.service_locator.yzLOlBY', 'get_ServiceLocator_YzLOlBYService', true],
            'App\\Controller\\finance\\ProductController::deleteImage' => ['privates', '.service_locator.jkFS_pW', 'get_ServiceLocator_JkFSPWService', true],
            'App\\Controller\\finance\\ProductController::deleteProduct' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\finance\\ProductController::editProduct' => ['privates', '.service_locator.yzLOlBY', 'get_ServiceLocator_YzLOlBYService', true],
            'App\\Controller\\finance\\ProductController::product' => ['privates', '.service_locator.yzLOlBY', 'get_ServiceLocator_YzLOlBYService', true],
            'App\\Controller\\finance\\SponsorController::deleteSponsor' => ['privates', '.service_locator.1GaYuhc', 'get_ServiceLocator_1GaYuhcService', true],
            'App\\Controller\\finance\\SponsorController::editSponsor' => ['privates', '.service_locator.1GaYuhc', 'get_ServiceLocator_1GaYuhcService', true],
            'App\\Controller\\finance\\SponsorController::sponsor' => ['privates', '.service_locator.1GaYuhc', 'get_ServiceLocator_1GaYuhcService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\finance\\LoginController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\finance\\ProductController:addImages' => ['privates', '.service_locator.yzLOlBY', 'get_ServiceLocator_YzLOlBYService', true],
            'App\\Controller\\finance\\ProductController:deleteImage' => ['privates', '.service_locator.jkFS_pW', 'get_ServiceLocator_JkFSPWService', true],
            'App\\Controller\\finance\\ProductController:deleteProduct' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\finance\\ProductController:editProduct' => ['privates', '.service_locator.yzLOlBY', 'get_ServiceLocator_YzLOlBYService', true],
            'App\\Controller\\finance\\ProductController:product' => ['privates', '.service_locator.yzLOlBY', 'get_ServiceLocator_YzLOlBYService', true],
            'App\\Controller\\finance\\SponsorController:deleteSponsor' => ['privates', '.service_locator.1GaYuhc', 'get_ServiceLocator_1GaYuhcService', true],
            'App\\Controller\\finance\\SponsorController:editSponsor' => ['privates', '.service_locator.1GaYuhc', 'get_ServiceLocator_1GaYuhcService', true],
            'App\\Controller\\finance\\SponsorController:sponsor' => ['privates', '.service_locator.1GaYuhc', 'get_ServiceLocator_1GaYuhcService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\finance\\LoginController::login' => '?',
            'App\\Controller\\finance\\ProductController::addImages' => '?',
            'App\\Controller\\finance\\ProductController::deleteImage' => '?',
            'App\\Controller\\finance\\ProductController::deleteProduct' => '?',
            'App\\Controller\\finance\\ProductController::editProduct' => '?',
            'App\\Controller\\finance\\ProductController::product' => '?',
            'App\\Controller\\finance\\SponsorController::deleteSponsor' => '?',
            'App\\Controller\\finance\\SponsorController::editSponsor' => '?',
            'App\\Controller\\finance\\SponsorController::sponsor' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\finance\\LoginController:login' => '?',
            'App\\Controller\\finance\\ProductController:addImages' => '?',
            'App\\Controller\\finance\\ProductController:deleteImage' => '?',
            'App\\Controller\\finance\\ProductController:deleteProduct' => '?',
            'App\\Controller\\finance\\ProductController:editProduct' => '?',
            'App\\Controller\\finance\\ProductController:product' => '?',
            'App\\Controller\\finance\\SponsorController:deleteSponsor' => '?',
            'App\\Controller\\finance\\SponsorController:editSponsor' => '?',
            'App\\Controller\\finance\\SponsorController:sponsor' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
