<?php

require_once('../vendor/autoload.php');

use \Twig\Loader\FilesystemLoader ;

$loader = new FilesystemLoader('../twig');
$twig = new \Twig\Environment($loader);

echo $twig->render('base.html.twig', ['authentified' => true]);