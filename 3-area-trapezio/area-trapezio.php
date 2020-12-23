<?php
    // Confira o Exercício em https://github.com/he4rtlabs/he4rtoberfest-2020/tree/master/challenges/3-area-trapezio

    $base1 = readline("Digite a Base Maior do trapézio: "); // Entradas
    $base2 = readline("Digite a Base Menor do trapézio: "); // Também poderia-se utilizar o $argv[x] para aceitar inputs direto no comando "php tabuada.php <input>"
    $altura = readline("Digite a Altura do trapézio: ");

    if (is_numeric($base1) and is_numeric($base2) and is_numeric($altura)){ // Verificação se as entradas são números
        $resultado = ($base1 + $base2) / 2 * $altura; // Calculo a área
        echo "A área do trapézio é: $resultado\n"; // Output da área
    }
    else{
        echo "Digite apenas números!\n"; // Caso alguma entrada não seja número
    }