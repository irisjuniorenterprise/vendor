<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDHwD3IJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDHwD3IJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDHwD3IJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDHwD3IJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDHwD3IJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'DHwD3IJ',
    'container.build_id' => '3ca67aec',
    'container.build_time' => 1671222327,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDHwD3IJ');
