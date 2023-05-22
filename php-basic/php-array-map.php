<?php
// array / array associative map in php

$products = [
    ['id' => 'id_1', 'price' => 30],
    ['id' => 'id_2', 'price' => 233],
    ['id' => 'id_3', 'price' => 5],
    ['id' => 'id_4', 'price' => 499]
];

$productsLabeled = array_map(fn($product) => [...$product, 'label' => $product['price'] > 100 ? 'expensive' : 'cheap'], $products);
// echo "output: "; print_r($productsLabeled);
// output: Array ( [0] => Array ( [id] => id_1 [price] => 30 [label] => cheap ) [1] => Array ( [id] => id_2 [price] => 233 [label] => expensive ) [2] => Array ( [id] => id_3 [price] => 5 [label] => cheap ) [3] => Array ( [id] => id_4 [price] => 499 [label] => expensive ) )

// echo 'output: ' . json_encode($productsLabeled);
// output: [{"id":"id_1","price":30,"label":"cheap"},{"id":"id_2","price":233,"label":"expensive"},{"id":"id_3","price":5,"label":"cheap"},{"id":"id_4","price":499,"label":"expensive"}]

// echo 'output: ' . '<pre>'; print_r($productsLabeled); echo '</pre>';
// output:
// Array
// (
//     [0] => Array
//         (
//             [id] => id_1
//             [price] => 30
//             [label] => cheap
//         )
//     [1] => Array
//         (
//             [id] => id_2
//             [price] => 233
//             [label] => expensive
//         )
//     [2] => Array
//         (
//             [id] => id_3
//             [price] => 5
//             [label] => cheap
//         )
//     [3] => Array
//         (
//             [id] => id_4
//             [price] => 499
//             [label] => expensive
//         )
// )

// echo 'output: ' . '<pre>'; var_dump($productsLabeled); echo '</pre>';
// output:
// array(4) {
//   [0]=>
//   array(3) {
//     ["id"]=>
//     string(4) "id_1"
//     ["price"]=>
//     int(30)
//     ["label"]=>
//     string(5) "cheap"
//   }
//   [1]=>
//   array(3) {
//     ["id"]=>
//     string(4) "id_2"
//     ["price"]=>
//     int(233)
//     ["label"]=>
//     string(9) "expensive"
//   }
//   [2]=>
//   array(3) {
//     ["id"]=>
//     string(4) "id_3"
//     ["price"]=>
//     int(5)
//     ["label"]=>
//     string(5) "cheap"
//   }
//   [3]=>
//   array(3) {
//     ["id"]=>
//     string(4) "id_4"
//     ["price"]=>
//     int(499)
//     ["label"]=>
//     string(9) "expensive"
//   }
// }

// echo 'output: ' . json_encode($productsLabeled); // todo
// output: [
//     { id: 'id_1', price: 30, label: 'cheap' },
//     { id: 'id_2', price: 233, label: 'expensive' },
//     { id: 'id_3', price: 5, label: 'cheap' },
//     { id: 'id_4', price: 499, label: 'expensive' }
// ];
?>
