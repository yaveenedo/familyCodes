<?php
    $php_array_map = function() {
        echo('Array Map in PHP<br /><br />');

        $numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];
        $numbers_labeled = array_map(fn($number) => [$number => $number % 2 === 0 ? 'even' : 'odd'], $numbers);
        $numbers_labeled_formatted = json_encode(array_values($numbers_labeled));
        echo("<pre>labeled numbers: $numbers_labeled_formatted</pre><br /><br />");
        // labeled numbers: [{"12":"even"},{"34":"even"},{"27":"odd"},{"23":"odd"},{"65":"odd"},{"93":"odd"},{"36":"even"},{"87":"odd"},{"4":"even"},{"254":"even"}]

        // ======================================================================================================================================================
    
        echo('Associative Array Map in PHP<br /><br />');
        
        $products = [
            ['id' => 'id_1', 'price' => 30],
            ['id' => 'id_2', 'price' => 233],
            ['id' => 'id_3', 'price' => 5],
            ['id' => 'id_4', 'price' => 499]
        ];
        
        $products_labeled = array_map(fn($product) => [...$product, 'label' => $product['price'] > 100 ? 'expensive' : 'cheap'], $products);
        $products_labeled_formatted = json_encode(array_values($products_labeled), JSON_PRETTY_PRINT);
        echo("<pre>labeled products: $products_labeled_formatted</pre>");
        // labeled products: [
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