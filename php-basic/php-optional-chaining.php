<?php
    $php_optional_chaining = function() {
        echo('Optional Chaining in PHP<br /><br />');

        $data_dictionary = [
            'foo' => [
                'bar' => [
                    'buzz' => 'lightyear'
                ],
                'baz' => [
                    'asd' => 2023,
                    'zxc' => [
                        ['patrick' => 'star'],
                        ['spongebob' => 'squarepants']
                    ],
                    'qwe' => ['john', 'sarah']
                ]
            ],
            'hello' => [
                'world' => 'hello world',
            ],
        ];

        // In PHP, there's no optional chaining for Associative Array.
        // If an Associative Array property doesn't exist, the value will be null, and it won't throw an error. Instead, we receive a warning.
        // To suppress this warning, we can use Error Control Operators, the at sign (@).

        $optional_chaining_result1 = @$data_dictionary['foo']['bar']['baz'];
        echo("<pre>optional chaining result 1: $optional_chaining_result1</pre><br />");
        // optional chaining result 1: null

        $optional_chaining_result2 = @$data_dictionary['foo']['bar']['buzz'];
        echo("<pre>optional chaining result 2: $optional_chaining_result2</pre><br />");
        // optional chaining result 2: lightyear
    };
?>