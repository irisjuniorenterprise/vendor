<?php

namespace ContainerDHwD3IJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSponsorTypeFormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\SponsorTypeForm' shared autowired service.
     *
     * @return \App\Form\SponsorTypeForm
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'SponsorTypeForm.php';

        return $container->privates['App\\Form\\SponsorTypeForm'] = new \App\Form\SponsorTypeForm();
    }
}
