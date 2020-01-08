<?php

$page_name = 'account/list_addresses.html.twig';

$address_array = [
    [
        'name' => 'Adresse 1',
        'address' => 'Adresse',
        'city' => 'Ville',
        'postal_code' => 'CodePostal',
        'country' => 'Pays',
    ],
    [
        'name' => 'Ma maison',
        'address' => '1 rue Pierre Loti',
        'city' => 'Tours',
        'postal_code' => '37000',
        'country' => 'France',
    ],
];

$options = [
    'address_array' => $address_array,
];

require_once('test.php');

?>