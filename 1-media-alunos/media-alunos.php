<?php
    // Confira o Exercício em https://github.com/he4rtlabs/he4rtoberfest-2020/tree/master/challenges/1-media-alunos

    $nota1 = readline("Digite a primeira nota: "); // entrada das notas
    $nota2 = readline("Digite a segunda nota: "); // também poderia-se utilizar o $argv[x] para aceitar inputs direto no comando "php tabuada.php <input>"

    $soma = $nota1 + $nota2; // soma
    $media = $soma / 2; // divisão por 2 dando assima média

    echo "A média é: $media\n"; // output do resultado da média