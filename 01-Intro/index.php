<?php
echo "Hello World<br><br>";

// PROGRAMAÇÃO FUNCIONAL:
$input = array(22, 34, 17, 18, 14, 13, 22, 25);
$filtro = function (int $age) {
    /** Tipagem int: 
     *  Está sendo atribuído a variável filtro essa função.
     *  Essa função tem deve ter como parâmetro um número inteiro;  5.2 é Int? 
     *  Retorna valor booleano para todo número maior ou igual 18.
     */
    return ($age >= 18);
};

$output = array_filter($input, $filtro);
/** Função array_filter:
 *  Funciona com dois parâmetro: (Array alvo, função de callback com retorno booleano)
 *  OBS.: A função de callback não precisa ser uma variável, pode ser a própria função como parâmetro.
 * 
 *  Essa função array_filter faz uma iteração, executando o callback para cada elemento iterado,
 *  caso o callback retorno True o elemento é adicionado ao array, se não passa sem adição.
 *  Assim array_filter retorna um array a partir de um filtro executado pelo callback.
 */

print_r($output); // Função print_r executa na tela os detalhes do parâmetro.
