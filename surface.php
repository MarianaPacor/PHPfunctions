<?php

require 'area.php';
require 'functions.php';

function surface($n1, $n2, $n3) {
    global $funcoesExecutadas;
    $funcoesExecutadas++;
    return higher(circle($n1),circle($n2),circle($n3));
}
echo surface(2, 3, 4);                              /* quebra de linha */ echo '<br>';