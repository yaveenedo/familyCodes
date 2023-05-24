<?php
    $php_array_reduce = function() {
        echo('Array Reduce in PHP<br /><br />');

        $today_money_spents = [4.99, 15, 9.99, 999.9, 2, 60];
        $today_money_spents_total = array_reduce($today_money_spents,  fn($total_money_spent, $current_money_spent) => $total_money_spent + $current_money_spent, 0);
        echo("total money spent today: $today_money_spents_total<br /><br /><br />");
        // total money spent today: 1091.88

        // ======================================================================================================================================================

        echo('Associative Array Reduce in PHP<br /><br />');
        
        $products = [
            ['id' => 'id_1', 'price' => 30],
            ['id' => 'id_2', 'price' => 233],
            ['id' => 'id_3', 'price' => 5],
            ['id' => 'id_4', 'price' => 499]
        ];
        
        $grouped_products = array_reduce($products,  fn($product_group, $current_product) => $current_product['price'] > 100 ? [...$product_group, 'expensive' => [...$product_group['expensive'], $current_product]] : [...$product_group, 'cheap' => [...$product_group['cheap'], $current_product]], ['expensive' => [], 'cheap' => []]);
        $grouped_products_formatted = json_encode($grouped_products, JSON_PRETTY_PRINT);
        echo("<pre>grouped products: $grouped_products_formatted</pre>");
        // grouped products: {
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