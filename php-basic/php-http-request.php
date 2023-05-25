<?php
    $php_http_request = function() {
        echo('HTTP Request in PHP<br /><br />');

        $request = curl_init();
        curl_setopt($request, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/todos/1');
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        $http_request_result = curl_exec($request);
        curl_close ($request);

        echo("<pre>http_request_result: ");
        print_r($http_request_result);
        echo("</pre>");

        // http_request_result: {
        //     "userId": 1,
        //     "id": 1,
        //     "title": "delectus aut autem",
        //     "completed": false
        // }
    };
?>