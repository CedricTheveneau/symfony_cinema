<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQzw05NT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQzw05NT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQzw05NT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQzw05NT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQzw05NT\App_KernelDevDebugContainer([
    'container.build_hash' => 'Qzw05NT',
    'container.build_id' => 'c03c9b08',
    'container.build_time' => 1700817852,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQzw05NT');
