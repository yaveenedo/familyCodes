<?php
    $php_spread_operator = function() {
        echo('Array Spread Operator in PHP<br /><br />');

        $fruits_in_my_refrigerator = ['apple', 'mango', 'orange'];
        $fruits_I_bought_from_supermarket = ['melon', 'banana'];
        $my_fruits = json_encode([...$fruits_in_my_refrigerator, ...$fruits_I_bought_from_supermarket]);
        echo("my fruits: $my_fruits<br /><br /><br />");
        // my fruits: ["apple","mango","orange","melon","banana"]

        // ======================================================================================================================================================

        echo('Associative Array Spread Operator in PHP<br /><br />');

        $car = ['wheels' => 4, 'tires' => 4];
    
        $minivan_car = [...$car, 'doors' => 4];
        echo('minivan car: ' . json_encode($minivan_car) . '<br /><br />');
        // minivan car: {"wheels":4,"tires":4,"doors":4}

        $sports_car = [...$car, 'doors' => 2];
        echo('sports car: ' . json_encode($sports_car) . '<br /><br />');
        // sports car: {"wheels":4,"tires":4,"doors":2}

        $red_sports_car = [...$car, 'doors' => 2, 'color' => 'red'];
        echo('red sports car: ' . json_encode($red_sports_car) . '<br /><br />');
        // red sports car: {"wheels":4,"tires":4,"doors":2,"color":"red"}  
    };
?>