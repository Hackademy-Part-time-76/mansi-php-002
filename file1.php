<?php

//1)Sequenza
// $nome = 'Francesco'; 
// echo $nome;

//2) Selezione
// $numero1 = 10;
// $numero2 = 10;
// if ($numero1 < $numero2) {
//     //entra sempre se condizione verifcata
//     echo "Maggiore";
// } 
// elseif ($numero1 > $numero2) {
//     echo "Minore";
// } else {
//     echo "Uguale";
// }
// $status = 'completato';
// switch ($status) {
//     case 'completato':
//         echo "Ordine Completato";
//         break;
//     case 'stornato':
//         echo "Ordine Stornato con successo.";
//         break;
//     case 'lavorazione':
//         echo "Abbiamo preso in carico il tuo pagamento.";
//         break;
//     default:
//         echo "AL momento non possiamo definire lo stato del pagamento.";
//         break;
// }


// $output = match ($status) {
//     'completato' => 'Ordine Completato',
//     'stornato' => 'Ordine Stornato con successo.',
//     'lavorazione' => 'Abbiamo preso in carico il tuo pagamento.',
//     default => 'AL momento non possiamo definire lo stato del pagamento.'
// };

// echo $output;

//Cicli o Iterazione
// $max = 10;
// for ($i = 0; $i < $max; $i++) {
//     echo 'Stai iterando il numero' . $i . "\n";
//     echo "Stai iterando il numero `{$i}` \n";
// }

//Traccia
// Numero che vanno da 1 a 50. Invece di stampare 25 mettere 'Ciao'.

// for ($i = 1; $i <= 50; $i++) {
//     if ($i == 25) {
//         echo "Ciao \n";
//     } else {
//         echo "Stai stampando il numero $i \n";
//     }
// }

$users = [
    ['name' => 'Francesco'],
    ['name' => 'Carlo'],
    ['name' => 'Salvatore'],
    ['name' => 'ALin'],
    ['name' => 'ciccio'],
    ['name' => 'Silvia'],
];

// echo 'Ciao mi chiamo ' . $users[0]['name'] . "\n";
// echo 'Ciao mi chiamo ' . $users[1]['name'] . "\n";
// echo 'Ciao mi chiamo ' . $users[2]['name'] . "\n";

// for ($i = 0; $i < count($users); $i++) {
//     echo 'Ciao mi chiamo ' . $users[$i]['name'] . "\n";
// }

foreach ($users as $key => $user) {
    if ($key !== 3) {
        echo 'Ciao mi chiamo ' . $user['name'] . "\n";
    }
}
