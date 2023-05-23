<?php
    $php_spread_operator = function() {
        echo('spread operator in PHP<br />');

        $fruits_in_my_refrigerator = ['apple', 'mango', 'orange'];
        $fruits_I_bought_from_supermarket = ['melon', 'banana'];
        $my_fruits = json_encode([...$fruits_in_my_refrigerator, ...$fruits_I_bought_from_supermarket]);
        echo("my fruits: $my_fruits<br />");
        // my fruits: ["apple","mango","orange","melon","banana"]

        $my_order = [
            'item' => 'apple',
            'quantity' => '5kg',
            'total_amount_to_pay' => 7.9
        ];
    
        $paid_order = [
            'is_paid' => true
        ];
    
        $my_paid_order = [
            ...$my_order,
            ...$paid_order
        ];

        $my_paid_order = json_encode($my_paid_order);
        echo("my paid order: $my_paid_order");
        // my paid order: {"item":"apple","quantity":"5kg","total_amount_to_pay":7.9,"is_paid":true}
    };
?>
