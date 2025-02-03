<?php

// 1. Definizione delle variabili
$intero = 10;               // Integer
$decimale = 3.14;           // Float
$testo = "Ciao, mondo!";    // String
$vero_falso = true;         // Boolean

// 2. Stampare il tipo delle variabili
echo "Variabili:\n";
echo "Il numero '$intero' è " . gettype($intero) . "\n";
echo "Il numero decimale è '$decimale' è " . gettype($decimale) . "\n";
echo "Il testo '$testo' è " . gettype($testo) . "\n";
echo "Il tipo di '$vero_falso' è " . gettype($vero_falso) . "\n";

// 3. Trasformare le variabili in costanti (best practice: nomi in maiuscolo)
const INTERO = 10;
const DECIMALE = 3.14;
const TESTO = "Ciao, mondo!";
const VERO_FALSO = true;

// Stampare di nuovo i tipi, ora come costanti
echo "\nCostanti:\n";
var_dump(INTERO);
var_dump(DECIMALE);
var_dump(TESTO);
var_dump(VERO_FALSO);



// ESERICIZIO 2

// Correzione dei nomi delle variabili
$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "$text2";  
$text7 = "bevuto";
$text8 = "tutto";

// FRASE
$frase = $text1 . " " . $text2 . " " . $text3 . $text4 . " " . 
         $text5 . " " . $text6 . " " . $text7 . " " . $text8 . ".";

// Stampare la frase
// echo $frase;

// ESERCIZIO 3


// Array forniti
$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
  [
    'oscura',
    'era',
    89,
    [
      'mezzo',
      'E'
    ],
    'ritrovai',
    'per'
  ],
  'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];

// Componiamo la frase 
$results = "Nel " . 
           $words1[6][3][0] . " " .   // mezzo
           "di cammin di nostra vita " .
           $words1[4] . " " .         // mi
           $words1[6][4] . " " .      // ritrovai
           $words1[6][5] . " " .      // per
           "una selva " .
           $words1[6][0] . ", " .     // oscura
           "ché la " .
           $words1[7] . " " .         // diritta
           "via " .
           $words1[6][1] . " " .      // era
           "smarrita.";

// Stampare la frase
echo $results;

?>

