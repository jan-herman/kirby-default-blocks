<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('jan-herman/default-blocks', [
    'blueprints' => [
        'blocks/heading' => __DIR__ . '/blueprints/heading.yml',
        'blocks/image'   => __DIR__ . '/blueprints/image.yml',
        'blocks/video'   => __DIR__ . '/blueprints/video.yml',
        'blocks/gallery' => __DIR__ . '/blueprints/gallery.yml',
    ],
    'snippets' => [
        'blocks/image'   => __DIR__ . '/snippets/image.latte',
        'blocks/video'   => __DIR__ . '/snippets/video.latte',
        'blocks/gallery' => __DIR__ . '/snippets/gallery.latte',
    ]
]);
