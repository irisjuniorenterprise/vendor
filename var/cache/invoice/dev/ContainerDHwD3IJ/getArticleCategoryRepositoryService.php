<?php

namespace ContainerDHwD3IJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleCategoryRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\ArticleCategoryRepository' shared autowired service.
     *
     * @return \App\Repository\ArticleCategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ArticleCategoryRepository.php';

        return $container->privates['App\\Repository\\ArticleCategoryRepository'] = new \App\Repository\ArticleCategoryRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
