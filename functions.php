<?php 
/* c. Definir uma constante chamada NUMERO_MAGICO, que contenha
um número. Tal constante deverá estar na primeira linha do nosso
código PHP. */
define('NUMERO_MAGICO', '40');
//Gerar um arquivo chamado funcoes.php:
//a. Definir uma função maior() que receba 3 números e retorne o maior deles.
function higher($n1, $n2, $n3) {
    global $funcoesExecutadas;
    $funcoesExecutadas++;
    if ($n1>$n2 && $n1>$n3) {
        return $n1;
        } 
    else if ($n2>$n1 && $n2>$n3){
        return $n2;
        } 
    else {
        return $n3;
        }
 }
echo higher(9, 7, 15);                             /* quebra de linha */ echo '<br>';
/*b. Definir uma função sequencia() que receba um parâmetro base, um
parâmetro limite, e retorne um array com a sequência de números a
partir do número base até o número limite. */
function sequence($n1, $n2) {
    global $funcoesExecutadas;
    $funcoesExecutadas++;
    $sequence = range($n1, $n2);
    return implode(", ", $sequence);    
}
echo sequence(0, 20);                             /* quebra de linha */ echo '<br>';
/*d. Modificar maior() de forma que, se receber apenas 2 parâmetros, a
função compare esses dois números com NUMERO_MAGICO.*/
function higherModified($n1 = NUMERO_MAGICO, $n2 = NUMERO_MAGICO, $n3 = NUMERO_MAGICO) {
        global $funcoesExecutadas;
        $funcoesExecutadas++;
    if ($n1>$n2 && $n1>$n3) {
        return $n1;
    } 
    else if ($n2>$n1 && $n2>$n3){
        return $n2;
    } 
    else {
        return $n3;
    }
}
echo higherModified(8, 2);                                  /* quebra de linha */ echo '<br>';
/*e. Modificar função sequencia() de forma que, se a receber apenas um
parâmetro, a função use NUMERO_MAGICO como limite. */
function sequenceModified($n1 = NUMERO_MAGICO, $n2 = NUMERO_MAGICO) {
    global $funcoesExecutadas;
    $funcoesExecutadas++;
    $sequence = range($n1, $n2);
    return implode(", ", $sequence);    
}
echo sequenceModified(3);                                      /* quebra de linha */ echo '<br>';


