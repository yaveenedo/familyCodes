<?php
    $python_currying_function = function() {
        echo('Currying Function in PHP<br /><br />');

        $exponent = fn($a) => fn($b) => $a ** $b;

        $exponent2 = $exponent(2);
        echo("exponent2(1): {$exponent2(1)}<br />");
        echo("exponent2(2): {$exponent2(2)}<br />");
        echo("exponent2(3): {$exponent2(3)}<br />");
        echo("exponent2(4): {$exponent2(4)}<br />");
        echo("exponent2(5): {$exponent2(5)}<br />");
        echo("exponent2(6): {$exponent2(6)}<br />");

        $exponent3 = $exponent(3);
        echo("exponent3(1): {$exponent3(1)}<br />");
        echo("exponent3(2): {$exponent3(2)}<br />");
        echo("exponent3(3): {$exponent3(3)}<br />");
        echo("exponent3(4): {$exponent3(4)}<br />");

        // exponent2(1): 2
        // exponent2(2): 4
        // exponent2(3): 8
        // exponent2(4): 16
        // exponent2(5): 32
        // exponent2(6): 64
        // exponent3(1): 3
        // exponent3(2): 9
        // exponent3(3): 27
        // exponent3(4): 81
    };
?>