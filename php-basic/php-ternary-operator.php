<?php
    $php_ternary_operator = function() {
        echo('ternary operator in PHP<br />');

        $your_username = 'admin';
        echo("your username: \"$your_username\"<br />");
        $can_go_to_admin_page = $your_username === 'admin' ? 'You can go to admin page' : 'Go away!';
        echo("$can_go_to_admin_page<br />");
        
        $your_username = 'roger';
        echo("your username: \"$your_username\"<br />");
        $can_go_to_admin_page = $your_username === 'admin' ? 'You can go to admin page' : 'Go away!';
        echo("$can_go_to_admin_page<br />");
    };
?>
