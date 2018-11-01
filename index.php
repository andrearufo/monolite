<?php

/**
 *
 * Welcome to Monolite
 * https://github.com/andrearufo/monolite
 *
 */

// Site config
$config = [

    // where are the md files
    'directory' => 'articles',

    // what is the site title
    'title' => 'Monolite',

    // there is a description
    'description' => 'A monolithique blogging platform without database',

    // some info for the footer
    'footer' => 'Monolite © '.date('Y') . ' by Andrea Rufo - All rights reserved'

];

// Just it!
include 'classes/index.php';
$site = new Site($config);
include 'layout/home.php';
