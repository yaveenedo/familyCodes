<?php
    $php_fibonacci = function() {
        echo('fibonacci in PHP<br />');

        $generate_fibonacci_until = function($stopper = 5) {
            $iterator = 0;
            $fibonacci = [0, 1];
            while (true) {
                if ($iterator === $stopper) break;
                $last_index = count($fibonacci) - 1;
                $last_number = $fibonacci[$last_index];
                $second_last_number = $fibonacci[$last_index - 1];
                $fibonacci = [...$fibonacci, $last_number + $second_last_number];
                $iterator += 1;
            }
            return $fibonacci;
        };
        
        $generated_fibonacci = str_replace(',', ', ', json_encode($generate_fibonacci_until(10)));
        echo("output: $generated_fibonacci");
        // output: [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]
    };
?>
