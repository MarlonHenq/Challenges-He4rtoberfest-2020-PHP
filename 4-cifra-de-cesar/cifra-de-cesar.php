<?php
    // Confira o Exercício em https://github.com/he4rtlabs/he4rtoberfest-2020/tree/master/challenges/4-cifra-de-cesar

    function conversao($key, $str){
        $retorno = ""; // Declarando variávei
    
        $strEmArray = str_split($str); // Transformando o texto recebido em array para a futura repetição
        $tamanhoArray = count($strEmArray); // Conta o tamanho do array para o loop
    
        
        for ($i = 0; $i < $tamanhoArray; $i++) {
            $a = chr(ord($strEmArray[$i]) + $key); // pega a letra em $strEmArray[$i] a passa para número adiciona a key e a transforma de volta para letra

            $retorno = $retorno . $a; // Adiciona a letra já criptografada (ou descriptografada) as já adicionadas em $retorno 
        }
    
        return $retorno;
      }

    $key = readline("Digite o número de posições que quer avançar (ps: pare retroceder e decifrar algo utilize um número negativo): "); // Entradas
    $string = readline("Digite o texto que deseja criptografar o descriptografar: "); // Também poderia-se utilizar o $argv[x] para aceitar inputs direto no comando "php tabuada.php <input>"
    
    echo(conversao($key, $string) ." \n"); // Chama a função 