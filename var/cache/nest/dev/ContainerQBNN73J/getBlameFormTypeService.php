<?php

namespace ContainerQBNN73J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlameFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\form\BlameFormType' shared autowired service.
     *
     * @return \App\form\BlameFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'BlameFormType.php';

        return $container->privates['App\\form\\BlameFormType'] = new \App\form\BlameFormType();
    }
}
