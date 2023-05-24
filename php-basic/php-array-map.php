<?php
    $php_array_map = function() {
        echo('array / array associative map in PHP<br /><br />');
        
        $products = [
            ['id' => 'id_1', 'price' => 30],
            ['id' => 'id_2', 'price' => 233],
            ['id' => 'id_3', 'price' => 5],
            ['id' => 'id_4', 'price' => 499]
        ];
        
        $products_labeled = array_map(fn($product) => [...$product, 'label' => $product['price'] > 100 ? 'expensive' : 'cheap'], $products);
        $products_labeled_formatted = json_encode(array_values($products_labeled), JSON_PRETTY_PRINT);
        echo("<pre>output: $products_labeled_formatted</pre>");
        // output: [
        //     {
        //         "id": "id_1",
        //         "price": 30,
        //         "label": "cheap"
        //     },
        //     {
        //         "id": "id_2",
        //         "price": 233,
        //         "label": "expensive"
        //     },
        //     {
        //         "id": "id_3",
        //         "price": 5,
        //         "label": "cheap"
        //     },
        //     {
        //         "id": "id_4",
        //         "price": 499,
        //         "label": "expensive"
        //     }
        // ]
    };
?>