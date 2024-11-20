<?php 
require 'functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product card</title>
    <style>

        main, body {
            display: flex;
            flex-direction: column;

        }
        .card {
            width: 400px;
            height: 300px;
            background-color: black;
            color: white;
            margin-top: 30px;
        }

    </style>
</head>
<body>

    <main>

        <h1 class="heading">Все продукты</h1>
        <?php 
        $ini = 'products.ini';
        $products = load_products_from_ini($ini);
        display_all_products($products) 
        ?>

    </main>

    
</body>
</html>