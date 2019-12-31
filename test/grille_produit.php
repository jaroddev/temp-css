<?php 

$page_name = 'grille_produit.html.twig';

/** 
 * Here we suppose that the back end find every first image for N products. 
 * Their id(s) for the link toward the product info page 
 * The name, price and category
*/

$product_array = [
    [   
        'product_name' => 'Nom du produit',
        'image_name' => 'blanc.jpg',
        'price' => 35.50 ,
    ],
    [   
        'product_name' => 'Nom du produit',
        'image_name' => 'noir.jpg',
        'price' => 35.50 ,
    ],
    [   
        'product_name' => 'Chemise tendance',
        'image_name' => 'noir.jpg',
        'price' => 53.00 ,
    ],
    [   
        'product_name' => 'Contre le racisme',
        'image_name' => 'jaune.jpg',
        'price' => 15.00 ,
    ],
];

$options = [
    'authentified' => false,
    'product_array' => $product_array,
];

require_once('test.php') ;