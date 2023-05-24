<?php
    $php_array_filter = function() {
        echo('array / array associative filter in PHP<br />');
        
        $products = [
            ['id' => 'id_1', 'price' => 30],
            ['id' => 'id_2', 'price' => 233],
            ['id' => 'id_3', 'price' => 5],
            ['id' => 'id_4', 'price' => 499]
        ];
        
        $cheap_products_only = array_filter($products, fn($product) => $product['price'] <= 100);
        $cheap_products_only_formatted = json_encode(array_values($cheap_products_only), JSON_PRETTY_PRINT);
        echo("<pre>output: $cheap_products_only_formatted</pre>");
        // output: [
        //     {
        //         "id": "id_1",
        //         "price": 30
        //     },
        //     {
        //         "id": "id_3",
        //         "price": 5
        //     }
        // ]
    };
?>