<?php
    // Confira o Exercício em https://github.com/he4rtlabs/he4rtoberfest-2020/tree/master/challenges/2-tabuada
    
    $tabuadaFinal = readline("Digite até qual tabuada deseja: "); // também poderia-se utilizar o $argv[x] para aceitar inputs direto no comando "php tabuada.php <input>"
    
    for ($i = 1; $i <= $tabuadaFinal; $i++) { // loop das tabuadas até o número dito no input
    echo "===========================\nA tabuada do número $i é:\n"; // cabeçalho de cada tabuada

    for ($a = 1; $a <= 10; $a++) { // loop interno que diz o valor de cada cálculo da tábuada (do 1 * X a 10 * X)
        $resultado = $a * $i;
        echo "  $i*$a = $resultado\n";
    }
} 