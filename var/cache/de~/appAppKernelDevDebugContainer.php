<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLjMUzU0\appAppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLjMUzU0/appAppKernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLjMUzU0.legacy');

    return;
}

if (!\class_exists(appAppKernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLjMUzU0\appAppKernelDevDebugContainer::class, appAppKernelDevDebugContainer::class, false);
}

return new \ContainerLjMUzU0\appAppKernelDevDebugContainer([
    'container.build_hash' => 'LjMUzU0',
    'container.build_id' => 'ca343d13',
    'container.build_time' => 1696602149,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLjMUzU0');
