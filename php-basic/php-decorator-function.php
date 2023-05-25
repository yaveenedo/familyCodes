<?php
    $php_decorator_function = function() {
        echo('Decorator Function in PHP<br /><br />');

        $measure_function_execution_time = function($a_function) {
            $wrapper = function() use ($a_function) {
                $start_time = microtime(true);
                $a_function();
                $finish_time = microtime(true);
                $execution_time = $finish_time - $start_time;
                echo("took $execution_time seconds to execute<br /><br />");
            };
            return $wrapper;
        };

        $dummy_function1 = $measure_function_execution_time(function() {
            sleep(3.7);
            echo('dummy_function1 ran<br />');
        });
        $dummy_function2 = $measure_function_execution_time(function() {
            sleep(4.4);
            echo('dummy_function2 ran<br />');
        });
        $dummy_function3 = $measure_function_execution_time(function() {
            sleep(1.6);
            echo('dummy_function3 ran<br />');
        });
    
        $dummy_function1();
        $dummy_function2();
        $dummy_function3();
    
        // dummy_function1 ran
        // took 3.0072660446167 seconds to execute
        // dummy_function2 ran
        // took 4.0033550262451 seconds to execute
        // dummy_function3 ran
        // took 1.0084700584412 seconds to execute
    };
?>