<?php

include 'classes/index.php';

// site config
$config = [
    'directory' => 'articles',
    'title' => 'Monolite',
    'description' => 'A monolithique blogging platform without database',
    'footer' => 'Monolite © '.date('Y') . ' by Andrea Rufo - All rights reserved'
];

$site = new Site($config);
include 'layout/home.php';
