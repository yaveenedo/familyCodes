<?php
    $php_array_reduce = function() {
        echo('array / array associative reduce in PHP<br />');
        
        $products = [
            ['id' => 'id_1', 'price' => 30],
            ['id' => 'id_2', 'price' => 233],
            ['id' => 'id_3', 'price' => 5],
            ['id' => 'id_4', 'price' => 499]
        ];
        
        $grouped_products = array_reduce($products,  fn($product_group, $current_product) => $current_product['price'] > 100 ? [...$product_group, 'expensive' => [...$product_group['expensive'], $current_product]] : [...$product_group, 'cheap' => [...$product_group['cheap'], $current_product]], [ 'expensive' => [], 'cheap' => []]);
        $grouped_products_formatted = json_encode($grouped_products, JSON_PRETTY_PRINT);
        echo("<pre>output: $grouped_products_formatted</pre>");
        // output: {
        //     "expensive": [
        //         {
        //             "id": "id_2",
        //             "price": 233
        //         },
        //         {
        //             "id": "id_4",
        //             "price": 499
        //         }
        //     ],
        //     "cheap": [
        //         {
        //             "id": "id_1",
        //             "price": 30
        //         },
        //         {
        //             "id": "id_3",
        //             "price": 5
        //         }
        //     ]
        // }
    };
?>