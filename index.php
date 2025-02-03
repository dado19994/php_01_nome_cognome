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
?>

