<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGxtxmh1\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGxtxmh1/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerGxtxmh1.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerGxtxmh1\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerGxtxmh1\appDevDebugProjectContainer([
    'container.build_hash' => 'Gxtxmh1',
    'container.build_id' => '87cd80ca',
    'container.build_time' => 1610830168,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGxtxmh1');
