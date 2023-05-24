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
    
        $minivanCar = [...$car, 'doors' => 4];
        echo('minivan car: ' . json_encode($minivanCar) . '<br /><br />');
        // minivan car: {"wheels":4,"tires":4,"doors":4}

        $sportsCar = [...$car, 'doors' => 2];
        echo('sports car: ' . json_encode($sportsCar) . '<br /><br />');
        // sports car: {"wheels":4,"tires":4,"doors":2}

        $redSportsCar = [...$car, 'doors' => 2, 'color' => 'red'];
        echo('red sports car: ' . json_encode($redSportsCar) . '<br /><br />');
        // red sports car: {"wheels":4,"tires":4,"doors":2,"color":"red"}  
    };
?>