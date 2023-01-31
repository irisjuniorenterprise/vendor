<?php

namespace ContainerWFxOnnH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_XliffLintService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Component\Translation\Command\XliffLintCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 5).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'XliffLintCommand.php';

        $container->privates['console.command.xliff_lint'] = $instance = new \Symfony\Component\Translation\Command\XliffLintCommand();

        $instance->setName('lint:xliff');
        $instance->setDescription('Lint an XLIFF file and outputs encountered errors');

        return $instance;
    }
}
