<?php
    $php_closure = function() {
        echo('Closure in PHP<br />');
        // closure is a function having access to the scope of its parent function after the parent function has returned.

        $new_amusement_arcade = function($name='Dude', $coins=0) {
            $play_game = function() use ($name, &$coins) {
                $coins -= 1;
                echo($coins >= 1 ? "<br />$name has $coins " . ($coins === 1 ? 'coin' : 'coins') . ' left.' : "<br />$name is out of coins.");
            };

            return $play_game;
        };

        $tommy_play_game = $new_amusement_arcade('Tommy', 3);
        $jenny_play_game = $new_amusement_arcade('Jenny', 5);

        $tommy_play_game();
        $tommy_play_game();
        $jenny_play_game();
        $tommy_play_game();

        // Tommy has 2 coins left.
        // Tommy has 1 coin left.
        // Jenny has 4 coins left.
        // Tommy is out of coins.
    };
?>