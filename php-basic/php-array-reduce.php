<?php
// array / array associative reduce in php

$products = [
    ['id' => 'id_1', 'price' => 30],
    ['id' => 'id_2', 'price' => 233],
    ['id' => 'id_3', 'price' => 5],
    ['id' => 'id_4', 'price' => 499]
];

$grouped_products = array_reduce($products,  fn($product_group, $current_product) => $current_product['price'] > 100 ? [...$product_group, 'expensive' => [...$product_group['expensive'], $current_product]] : [...$product_group, 'cheap' => [...$product_group['cheap'], $current_product]], [ 'expensive' => [], 'cheap' => []]);
// echo "output: "; print_r($grouped_products);
// output: Array ( [expensive] => Array ( [0] => Array ( [id] => id_2 [price] => 233 ) [1] => Array ( [id] => id_4 [price] => 499 ) ) [cheap] => Array ( [0] => Array ( [id] => id_1 [price] => 30 ) [1] => Array ( [id] => id_3 [price] => 5 ) ) )

// echo 'output: ' . json_encode($grouped_products);
// output: {"expensive":[{"id":"id_2","price":233},{"id":"id_4","price":499}],"cheap":[{"id":"id_1","price":30},{"id":"id_3","price":5}]}

// echo 'output: ' . '<pre>'; print_r($grouped_products); echo '</pre>';
// output:
// Array
// (
//     [expensive] => Array
//         (
//             [0] => Array
//                 (
//                     [id] => id_2
//                     [price] => 233
//                 )
//             [1] => Array
//                 (
//                     [id] => id_4
//                     [price] => 499
//                 )
//         )
//     [cheap] => Array
//         (
//             [0] => Array
//                 (
//                     [id] => id_1
//                     [price] => 30
//                 )
//             [1] => Array
//                 (
//                     [id] => id_3
//                     [price] => 5
//                 )
//         )
// )

// echo 'output: ' . '<pre>'; var_dump($grouped_products); echo '</pre>';
// output:
// array(2) {
//   ["expensive"]=>
//   array(2) {
//     [0]=>
//     array(2) {
//       ["id"]=>
//       string(4) "id_2"
//       ["price"]=>
//       int(233)
//     }
//     [1]=>
//     array(2) {
//       ["id"]=>
//       string(4) "id_4"
//       ["price"]=>
//       int(499)
//     }
//   }
//   ["cheap"]=>
//   array(2) {
//     [0]=>
//     array(2) {
//       ["id"]=>
//       string(4) "id_1"
//       ["price"]=>
//       int(30)
//     }
//     [1]=>
//     array(2) {
//       ["id"]=>
//       string(4) "id_3"
//       ["price"]=>
//       int(5)
//     }
//   }
// }

// echo 'output: ' . json_encode($grouped_products); // todo
// output: {
//     expensive: [
//         { id: 'id_2', price: 233 },
//         { id: 'id_4', price: 499 }
//     ],
//     cheap: [
//         { id: 'id_1', price: 30 },
//         { id: 'id_3', price: 5 }
//     ]
// }
?>
