<?php

namespace ContainerAo93sep;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1GaYuhcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1GaYuhc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1GaYuhc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'sponsorRepository' => ['privates', 'App\\Repository\\SponsorRepository', 'getSponsorRepositoryService', true],
        ], [
            'entityManager' => '?',
            'sponsorRepository' => 'App\\Repository\\SponsorRepository',
        ]);
    }
}
