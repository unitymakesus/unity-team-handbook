<?php

use Illuminate\Support\Str;

return [
    'baseUrl'         => 'https://unity-team-handbook.test',
    'siteName'        => 'Unity Web Agency Team Handbook',
    'siteDescription' => 'Policies and practices for our awesome team.',
    'production'      => false,

    // Algolia search
    'docsearchAppId' => 'MAWZFT2YPY',
    'docsearchApiKey' => '341c2b3ea225c0a2b80832c73eb59a45',
    'docsearchIndexName' => 'team-handbook-unitywebagency',

    // navigation menu
    'navigation' => require_once('lib/nav.php'),

    // helper methods
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'lastModified' => function ($page) {
        return date('F j, Y', $page->getModifiedTime());
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
