<?php 

$page_name = 'produit.html.twig';

$to_escape_value = '</h1><script>alert("haha")</script>';

$product_name = 'Nom du produit';

$product_array = [
    [   
        'color' => 'blanc',
        'image_name' => 'blanc.jpg',
    ],
    [   
        'color' => 'noir',
        'image_name' => 'noir.jpg',
    ],
    [
        'color' => 'pas d\'image',
        'image_name' => 'aucune'
    ]
];

/**
 * Change the value of options['name'] to test CSRF security failure and insert javascript into markup
 * 
 * $to_escape_value to test javascript code insertion
 * $product_name to display a product name 
 */

$test_value = $to_escape_value;

$options = [
    'authentified' => false,
    'name' => $product_name,
    'product_array' => $product_array,
];

require_once('test.php') ;