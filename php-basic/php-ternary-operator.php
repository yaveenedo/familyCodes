<?php
    $php_ternary_operator = function() {
        echo('Ternary Operator in PHP<br /><br />');

        $your_username = 'admin';
        $can_go_to_admin_page = $your_username === 'admin' ? 'You can go to admin page' : 'Go away!';
        echo("your username: \"$your_username\", $can_go_to_admin_page<br /><br />");
        // your username: "admin", You can go to admin page
        
        $your_username = 'roger';
        $can_go_to_admin_page = $your_username === 'admin' ? 'You can go to admin page' : 'Go away!';
        echo("your username: \"$your_username\", $can_go_to_admin_page");
        // your username: "roger", Go away!
    };
?>