<?php
    /*
    <?php is opening php tag
    ?> is closing php tag
    every line of code must end with ; except for the last one or if its the only one inside php tag
    php naming conventions are Underscores for variables and functions, camelCase for Methods, and PascalCase for Classes
    $[a-zA-Z0-9_] is for initialize variable
    var_dump is for render information of variable
    echo is for render string in html
    <br /> in echo is for render line break in html
    ' is for assign string
    . can be used for string concatenation
    " can be used for javascript-like template literal or python-like f-string
    use \ to escape character
    bool is case-insensitive
    null is case-insensitive
    array('key' => 'value') or ['key' => 'value'] is called associative arrays, its like array in javascript and list in python
    array() or [] without 'key' => 'value' is called associative arrays, its like object in javascript and dictionary in python
    */
    $line_break = '<br />';
    echo($line_break);
    $my_name = 'willy';
    $string_concatenation = 'my name is ' . $my_name . $line_break; // . can be used for string concatenation
    echo($string_concatenation);
    $template_literal = "just call me $my_name $line_break"; // " can be used for javascript-like template literal or python-like f-string
    echo($template_literal);

    $variable_string = 'hello world 123!';
    echo($variable_string);
    echo($line_break);

    $variable_int = 21;
    $pizza_menu = "pizza is \$$variable_int"; // use \ to escape character
    echo($pizza_menu);
    echo($line_break);

    $variable_float = 70.4;
    $my_weight = "I'm $variable_float kgs";
    echo($my_weight);

    $variable_bool_is_online = true;
    $variable_bool_is_for_sale = false;

    $variable_null = null;
    echo($line_break);

    $variable_array = array("foo", "bar");
    $variable_array = ["foo", "bar"];
    var_dump($variable_array[0]);

    $variable_array = array(
        "foo" => "bar",
        "bar" => "foo",
    );

    $variable_array = [
        "foo" => "bar",
        "bar" => "foo",
    ];

    var_dump($variable_array["foo"]);
?>
