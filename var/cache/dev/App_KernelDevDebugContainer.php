<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRLLwBwS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRLLwBwS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRLLwBwS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRLLwBwS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRLLwBwS\App_KernelDevDebugContainer([
    'container.build_hash' => 'RLLwBwS',
    'container.build_id' => 'ebb99699',
    'container.build_time' => 1605974953,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRLLwBwS');
