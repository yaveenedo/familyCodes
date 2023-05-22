<?php
$generateFibonacciUntil = function($stopper = 5) {
    $iterator = 0;
    $fibonacci = [0, 1];
    while (true) {
        if ($iterator === $stopper) break;
        $lastIndex = count($fibonacci) - 1;
        $lastNumber = $fibonacci[$lastIndex];
        $secondLastNumber = $fibonacci[$lastIndex - 1];
        $fibonacci = [...$fibonacci, $lastNumber + $secondLastNumber];
        $iterator += 1;
    }
    return $fibonacci;
};

$generatedFibonacci = $generateFibonacciUntil(10);

// echo 'output: '; print_r($generatedFibonacci);
// output: Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 2 [4] => 3 [5] => 5 [6] => 8 [7] => 13 [8] => 21 [9] => 34 [10] => 55 [11] => 89 )
// echo 'output: ' . json_encode($generatedFibonacci);
// output: [0,1,1,2,3,5,8,13,21,34,55,89]
// echo 'output: '; print_r($generatedFibonacci);
// output: Array ( [0] => 0 [1] => 1 [2] => 1 [3] => 2 [4] => 3 [5] => 5 [6] => 8 [7] => 13 [8] => 21 [9] => 34 [10] => 55 [11] => 89 )
// echo 'output: '; var_dump($generatedFibonacci);
// output: array(12) { [0]=> int(0) [1]=> int(1) [2]=> int(1) [3]=> int(2) [4]=> int(3) [5]=> int(5) [6]=> int(8) [7]=> int(13) [8]=> int(21) [9]=> int(34) [10]=> int(55) [11]=> int(89) }
echo 'output: ' . str_replace(',', ', ', json_encode($generatedFibonacci));
// output: [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]
?>
