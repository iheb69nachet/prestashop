<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2kazziv\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2kazziv/appProdProjectContainer.php') {
    touch(__DIR__.'/Container2kazziv.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container2kazziv\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container2kazziv\appProdProjectContainer([
    'container.build_hash' => '2kazziv',
    'container.build_id' => '370a13ee',
    'container.build_time' => 1611329406,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2kazziv');
