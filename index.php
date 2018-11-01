<?php

include 'classes/index.php';

// articles dir

// site config
$config = [
    'directory' => 'articles',
    'title' => 'Monolite',
    'description' => 'A monolitique bloging platform without database',
    'footer' => date('Y') . ' © All rights reserved'
];

$site = new Site($config);
include 'layout/home.php';
