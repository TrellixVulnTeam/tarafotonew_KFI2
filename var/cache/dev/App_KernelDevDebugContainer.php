<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9rfxMij\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9rfxMij/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9rfxMij.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9rfxMij\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9rfxMij\App_KernelDevDebugContainer([
    'container.build_hash' => '9rfxMij',
    'container.build_id' => 'abaff218',
    'container.build_time' => 1626423556,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9rfxMij');
