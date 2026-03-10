<?php


// $a = 2;
// $b = 10;
// $c = 5;
// $d = 12;

// $somma1 = $a + $b;
// $somma2 = $b + $c;
// $somma2 = $somma1 + ($somma2 + $c);
// echo $somma1;  
//1) Estrazione
//2) Incaspulamento

// function sum($numero1, $numero2 = 0)
// {
//     return $numero1 + $numero2;
// }

// sum($a, $b);
// sum($b, $c);
// echo sum(sum($a, $b), sum(sum($b, $c), $c));

function sum(int $n1, int $n2): int | null
{
    return $n1 + $n2;
}
echo sum(3, 'ciao');
