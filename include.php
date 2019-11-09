<?php

//Gerar um arquivo chamado incluir.php com um echo com a seguinte string “Sou incluir.php”.
echo "Sou include.php <br>";
//a. Incluir no arquivo cumprimento.php. O que acontece?
/* RESPOSTA: */ include 'greet.php'; // O arquivo imprime a string "Sou include.php" e um ERRO inclusão falhou. 
                                                            /* quebra de linha */ echo '<br>';
//b. Substituir include por require. O que acontece? 
/* RESPOSTA: */ require 'greet.php'; // O arquivo imprime a string "Sou include.php" e um FATAL ERROR.
                                                            /* quebra de linha */ echo '<br>';
/*c. Gerar na mesma pasta um arquivo cumprimento.php que faça
somente echo “Olá, Mundo”. O que acontece agora com o ponto a e
o ponto b? */
// O arquivo imprime ambas as strings.
/*d. No arquivo incluir.php, substituir o require por include, e incluir 3
vezes o mesmo arquivo. O que acontece? */
/* RESPOSTA: */ include 'greet.php';                          /* quebra de linha */ echo '<br>';
                include 'greet.php';                          /* quebra de linha */ echo '<br>';
                include 'greet.php';                          /* quebra de linha */ echo '<br>';
// O arquivo imprime as strings de greet.php 3 vezes.
//e. O arquivo incluir.php, substituir todos os include por include_once. O que acontece?
            include_once 'greet.php';
            include_once 'greet.php';
            include_once 'greet.php'; 