<?php
// array / array associative filter in php

$products = [
    ['id' => 'id_1', 'price' => 30],
    ['id' => 'id_2', 'price' => 233],
    ['id' => 'id_3', 'price' => 5],
    ['id' => 'id_4', 'price' => 499]
];

$cheap_products_only = array_filter($products, fn($product) => $product['price'] <= 100);
// echo "output: "; print_r($cheap_products_only);
// output: Array ( [0] => Array ( [id] => id_1 [price] => 30 ) [2] => Array ( [id] => id_3 [price] => 5 ) )

// echo 'output: ' . json_encode($cheap_products_only);
// output: {"0":{"id":"id_1","price":30},"2":{"id":"id_3","price":5}}

// echo 'output: ' . '<pre>'; print_r($cheap_products_only); echo '</pre>';
// output:
// Array
// (
//     [0] => Array
//         (
//             [id] => id_1
//             [price] => 30
//         )
//     [2] => Array
//         (
//             [id] => id_3
//             [price] => 5
//         )
// )

// echo 'output: ' . '<pre>'; var_dump($cheap_products_only); echo '</pre>';
// output:
// array(2) {
//   [0]=>
//   array(2) {
//     ["id"]=>
//     string(4) "id_1"
//     ["price"]=>
//     int(30)
//   }
//   [2]=>
//   array(2) {
//     ["id"]=>
//     string(4) "id_3"
//     ["price"]=>
//     int(5)
//   }
// }

echo 'output: ' . json_encode(array_values($cheap_products_only), JSON_PRETTY_PRINT); // todo
// output: [ { "id": "id_1", "price": 30 }, { "id": "id_3", "price": 5 } ]
// output: [
//     { id: 'id_1', price: 30 },
//     { id: 'id_3', price: 5 },
// ];
?>
