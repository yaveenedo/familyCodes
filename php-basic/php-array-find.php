<?php
    $php_array_find = function() {
        // JavaScript-like Array.find() function
        $array_find = function($an_array, $callback_function) {
            $data_found = null;
            foreach ($an_array as $an_array_index => $an_object) {
                $is_data_found = $callback_function($an_object, $an_array_index, $an_array);
                if ($is_data_found) {
                    $data_found = $an_object;
                    break;
                }
            }
            return $data_found;
        };

        echo('Array Find in PHP<br /><br />');

        $numbers = [12, 34, 27, 23, 65, 93, 36, 87, 4, 254];

        $even_number_found = $array_find($numbers, fn($number) => $number % 2 === 0);
        echo("even number found: $even_number_found<br />");
        // even numbers only: 12
        
        $odd_number_found = $array_find($numbers, fn($number) => $number % 2 !== 0);
        echo("odd number found: $odd_number_found<br /><br />");
        // odd numbers only: 27

        // ======================================================================================================================================================

        echo('Associative Array Find in PHP<br /><br />');
        
        $products = [
            [
                'id' => 'id_1',
                'name' => 'name_1',
                'variant' => [
                    'is_free_shipping' => false,
                    'price' => 290,
                ]
            ],
            [
                'id' => 'id_2',
                'name' => 'name_2',
                'variant' => [
                    'is_free_shipping' => true,
                    'price' => 232,
                ]
            ],
            [
                'id' => 'id_3',
                'name' => 'name_3',
                'variant' => [
                    'is_free_shipping' => false,
                        'price' => 140,
                ]
            ],
            [
                'id' => 'id_4',
                'name' => 'name_4',
                'variant' => [
                    'is_free_shipping' => true,
                    'price' => 499,
                ]
            ]
        ];

        $product_found = $array_find($products, fn($product) => @$product['id'] === 'id_3');
        $product_found_formatted = json_encode($product_found, JSON_PRETTY_PRINT);
        echo("product found: $product_found_formatted<br /><br />");
        // product found: { "id": "id_3", "name": "name_3", "variant": { "is_free_shipping": false, "price": 140 } }

        $product_found = $array_find($products, fn($product) => @$product['variant']['price'] >= 200 && @$product['variant']['is_free_shipping'] === true);
        $product_found_formatted = json_encode($product_found, JSON_PRETTY_PRINT);
        echo("product found: $product_found_formatted");
        // product found: { "id": "id_2", "name": "name_2", "variant": { "is_free_shipping": true, "price": 232 } }
    };
?>