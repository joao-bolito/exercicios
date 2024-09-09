<?php
function countLetraA($inputString) {
    $countLowercaseA = substr_count($inputString, 'a');
    $countUppercaseA = substr_count($inputString, 'A');
    
    $totalCount = $countLowercaseA + $countUppercaseA;
    
    if ($totalCount > 0) {
        echo "A letra 'a' (maiúscula ou minúscula) aparece $totalCount vezes na string.\n";
    } else {
        echo "A letra 'a' (maiúscula ou minúscula) não foi encontrada na string.\n";
    }
}

function main() {
    $inputString = readline("Informe uma string: ");
    countLetraA($inputString);
}


main();
