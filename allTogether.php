<?php
/* 5. Modificar tudoJunto.php para a primeira linha diga $funcoesExecutadas =
0. Em seguida, modificar cada função de funcoes.php e superficie.php
para que, ao começar, façam $funcoesExecutadas++. Testar invocar várias
funções e ver quanto vale $funcoesExecutadas em cada momento. Isso
está permitido? O que acontece? */
$funcoesExecutadas = 0;             /* quebra de linha */ echo '<br>';
/* Criar uma arquivo tudoJunto.php que inclua o arquivo funcoes.php e
superficie.php, definindo uma função que receberá os raios de 3 círculos
e retornará a maior superfície entre ambos. Para este exercício, devemos
reutilizar as funções já definidas. */
require 'surface.php';
/* 6. Caso o exercício anterior tenha provocado um erro, modificar a variável
com a palavra reservada global para que funcione. */
echo surface(3, 5, 7);                      /* quebra de linha */ echo '<br>';
echo surface(8, 3, 1);                      /* quebra de linha */ echo '<br>';
echo higherModified(4, 6);                      /* quebra de linha */ echo '<br>';
echo higher(7, 9, 2);                           /* quebra de linha */ echo '<br>';
echo $funcoesExecutadas;                    /* quebra de linha */ echo '<br>';
/* 7. Utilizando strpos(), encontrar a posição da primeira aparição de "php"
dentro da cadeia: "Adoro php, Eu também adoro php!" */
echo strpos("Adoro php, Eu também adoro php!", "php");          /* quebra de linha */ echo '<br>';
