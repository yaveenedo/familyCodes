<?php
    $php_array_filter = function() {
        echo('Array Filter in PHP<br /><br />');

        $numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

        $even_numbers_only = array_filter($numbers, fn($number) => $number % 2 === 0);
        $even_numbers_only_formatted = json_encode(array_values($even_numbers_only));
        echo("<pre>even numbers only: $even_numbers_only_formatted</pre>");
        // even numbers only: [12,34,36,4,254]

        $odd_numbers_only = array_filter($numbers, fn($number) => $number % 2 !== 0);
        $odd_numbers_only_formatted = json_encode(array_values($odd_numbers_only));
        echo("<pre>even numbers only: $odd_numbers_only_formatted</pre><br /><br />");
        // odd numbers only: [27,23,65,93,87]

        // ======================================================================================================================================================
    
        echo('Associative Array Filter in PHP<br /><br />');
        
        $products = [
            ['id' => 'id_1', 'price' => 30],
            ['id' => 'id_2', 'price' => 233],
            ['id' => 'id_3', 'price' => 5],
            ['id' => 'id_4', 'price' => 499]
        ];
        
        $cheap_products_only = array_filter($products, fn($product) => $product['price'] <= 100);
        $cheap_products_only_formatted = json_encode(array_values($cheap_products_only), JSON_PRETTY_PRINT);
        echo("<pre>cheap products only: $cheap_products_only_formatted</pre>");
        // cheap products only: [
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