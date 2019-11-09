<?php

//Gerar um arquivo chamado area.php:
//a. Definir uma função triangulo() que retorne sua area.
function triangle($n1, $n2) {
    return "A área do triangulo é: " . ($n1*$n2)/2;
}
echo triangle(5, 9);                    /* quebra de linha */ echo '<br>';
//b. Definir uma função retangulo() que retorne sua area.
function rectangle($n1, $n2) {
    return "A área do retangulo é: " . $n1*$n2;
}
echo rectangle(5, 9);                   /* quebra de linha */ echo '<br>';
//c. Definir uma função quadrado() que retorne sua area.
function square ($n1) {
    return "A área do quadrado é: " . $n1*$n1;
}
echo square(9);                           /* quebra de linha */ echo '<br>';
//d. Utilizando a função pi(), definir uma função circulo() que retorne sua area.
function circle($n1) {
    return "A área do círculo é: " . pi()*($n1*$n1);
}
echo circle(5);                             /* quebra de linha */ echo '<br>';