<?php

function fibonacci($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
    
    return $fib;
}

function printOddFibonacci($n) {
    $fib = fibonacci($n);
    
    foreach ($fib as $index => $value) {
        if ($value % 2 !== 0) {
            echo ($index + 1) . ". " . $value . "\n";
        }
    }
}

$N = 20;

echo "Nieparzyste elementy ciągu Fibonacciego do $N-tego elementu:\n";
printOddFibonacci($N);

?>