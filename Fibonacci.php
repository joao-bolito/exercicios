<?php
function SequenciaFibonacci($maxNumber) {
    $a = 0;
    $b = 1;

    echo "$a ";
    if ($maxNumber > 0) {
        echo "$b ";
    }

    while ($b <= $maxNumber) {
        $temp = $b;
        $b = $a + $b;
        $a = $temp;

        if ($b <= $maxNumber) {
            echo "$b ";
        }
    }

    echo "\n";
}

function Fibonacci($number) {
    if ($number < 0) {
        return false;
    }

    $a = 0;
    $b = 1;

    if ($number == $a || $number == $b) {
        return true;
    }

    while ($b < $number) {
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }

    return $b == $number;
}

function main() {
    $number = intval(readline("Informe um número: "));

    echo "Sequência de Fibonacci até $number: ";
    SequenciaFibonacci($number);

    if (Fibonacci($number)) {
        echo "O número $number pertence à sequência de Fibonacci.\n";
    } else {
        echo "O número $number NÃO pertence à sequência de Fibonacci.\n";
    }
}


main();