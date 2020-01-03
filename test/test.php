<?php

if (!isset($page_name)){
    $page_name = 'base.html.twig';
}

if(!isset($options)){
    $options = ['authentified' => false];
}

require_once('../vendor/autoload.php');

use \Twig\Loader\FilesystemLoader ;

$loader = new FilesystemLoader('../twig');
$twig = new \Twig\Environment($loader);

echo $twig->render($page_name, $options);