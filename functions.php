<?php 
session_start();

function load_products_from_ini($filename) {
    if (!file_exists($filename)) {
        return 'Файл продуктов не найден';
    }

    $products = parse_ini_file($filename, true);

    return $products; 
}

function display_product_card($product) {

    echo '<div class="card">';
    echo '<h2>ID: '.($product['id']).'</h2>';
    echo '<h2>Name: '.($product['name']).'</h2>';
    echo '<h2>Description: '.($product['description']).'</h2>';
    echo '<h2>Price: '.($product['price']).'</h2>';
    echo '<h2>Stock: '.($product['stock']).'</h2>';
    echo '</div>';
}

function display_all_products($products) {

    foreach ($products as $product) {
        display_product_card($product);
    }
}

?>