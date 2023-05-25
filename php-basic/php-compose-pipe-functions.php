<?php
    $php_compose_pipe_functions = function() {
        echo('Compose & Pipe Functions in PHP<br /><br />');

        // Functional Programming, often uses pipe and compose = higher order functions
        // A higher order is any function which takes a function as an argument, returns a function, or both.
        // Here's how a compose function works:

        // Start with small unary (one argument) functions
        $add2 = fn($x) => $x + 2;
        $subtract1 = fn($x) => $x - 1;
        $multiply_by5 = fn($x) => $x * 5;

        // Notice how the functions execute from inside to outside / from right to left
        $without_compose_or_pipe_result = $multiply_by5($subtract1($add2(4)));
        echo("without_compose_or_pipe_result: $without_compose_or_pipe_result<br /><br />");
        // without_compose_or_pipe_result: 25

        // The above is NOT a compose or pipe function - let's make one

        // compose execute functions from right to left
        $compose = fn(...$functions) => fn($value) => array_reduce(array_reverse($functions), fn($current_result, $current_function) => $current_function($current_result), $value);

        $compose_result = $compose($multiply_by5, $subtract1, $add2)(4);
        echo("compose_result: $compose_result<br /><br />");
        // compose_result: 25

        // pipe execute functions from left to right
        $pipe = fn(...$functions) => fn($value) => array_reduce($functions, fn($current_result, $current_function) => $current_function($current_result), $value);
        $pipe_result = $pipe($add2, $subtract1, $multiply_by5)(4);
        echo("pipe_result: $pipe_result<br /><br />");
        // pipe_result: 25

        // example with a 2nd argument
        $divide_by = fn($divisor, $number_to_be_divided) => $number_to_be_divided / $divisor;

        $pipe_result2 = $pipe($add2, $subtract1, $multiply_by5, fn($x) => $divide_by(2, $x))(5);
        echo("pipe_result2: $pipe_result2<br /><br />");
        // pipe_result2: 15

        // example with currying the divide_by function for a custom unary function
        $divide_by_curried = fn($divisor) => fn($number_to_be_divided) => $number_to_be_divided / $divisor;
        $divide_by2 = $divide_by_curried(2);

        $pipe_result3 = $pipe($add2, $subtract1, $multiply_by5, $divide_by2)(5);
        echo("pipe_result3: $pipe_result3");
        // pipe_result3: 15
    };
?>