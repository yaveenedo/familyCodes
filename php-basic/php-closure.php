<?php
    $php_closure = function() {
        echo('closure in PHP<br />');
        // closure is a function having access to the scope of its parent function after the parent function has returned.

        $new_amusement_arcade = function($name='Dude', $coins=0) {
            $play_game = function() use ($name, &$coins) {
                $coins -= 1;
                echo($coins >= 1 ? "<br /><br />$name has $coins " . ($coins === 1 ? 'coin' : 'coins') . ' left.' : "<br /><br />$name is out of coins.");
            };

            return $play_game;
        };

        $tommy_play_game = $new_amusement_arcade(name: 'Tommy', coins: 3);
        $jenny_play_game = $new_amusement_arcade(name: 'Jenny', coins: 5);

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
