<?php 

$page_name = 'product/show.html.twig';

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

$charity_array = [
    [
        'id' => 0,
        'name' => 'WWF',
        'image_name' => 'logo0.png',
    ],
    [
        'id' => 1,
        'name' => 'Les restaurants du cœur',
        'image_name' => 'logo1.png',
    ],
    [
        'id' => 2,
        'name' => 'Secours populaire français',
        'image_name' => 'logo2.png',
    ],
    [
        'id' => 3,
        'name' => 'UNICEF',
        'image_name' => 'logo3.png',
    ],
    [
        'id' => 4,
        'name' => 'Action contre La Faim',
        'image_name' => 'logo4.png',
    ],
    [
        'id' => 5,
        'name' => 'Sea Shepherd Conservation Society',
        'image_name' => 'logo5.png',
    ],
    [
        'id' => 6,
        'name' => 'Croix-Rouge française',
        'image_name' => 'logo6.png',
    ],
    [
        'id' => 7,
        'name' => 'Médecins sans frontières',
        'image_name' => 'logo7.png',
    ],
    [
        'id' => 8,
        'name' => '30 Millions d\'Amis',
        'image_name' => 'logo8.png',
    ],
    [
        'id' => 9,
        'name' => 'Institut Pasteur',
        'image_name' => 'logo9.png',
    ],
];

/**
 * Change the value of options['name'] to test CSRF security failure and insert javascript into markup
 * 
 * $to_escape_value to test javascript code insertion
 * $product_name to display a product name 
 */

$options = [
    'authentified' => false,
    'name' => $product_name,
    'product_array' => $product_array,
    'charity_array' => $charity_array,
];

require_once('test.php') ;