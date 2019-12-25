<?php 

$page_name = 'produit.html.twig';

$to_escape_value = '</h1><script>alert("haha")</script>';

$product_name = 'Nom du produit';

/**
 * Change the value of options['name'] to test CSRF security failure and insert javascript into markup
 * 
 * $to_escape_value to test javascript code insertion
 * $product_name to display a test product name 
 */

$test_value = $to_escape_value;

$options = [
    'authentified' => false,
    'name' => $product_name,
    'image_defaut' => 'T-shirt_Adn.jpg',
];

require_once('test.php') ;