<?php

// Diese Funktion überprüft, ob eine Zahl eine Primzahl ist.
function istPrimzahl($zahl)
{
    if ($zahl <= 1) {
        return false;
    }
    for ($i = 2; $i < $zahl; $i++) {
        if ($zahl % $i == 0) {
            return false;
        }
    }
    return true;
}

// White Box Test für die Funktion istPrimzahl
// Wir kennen die interne Logik der Funktion und erstellen spezifische Testfälle, um jeden Teil des Codes zu überprüfen.

// Testfall 1: Überprüfung einer Zahl kleiner als 2 (Grenzfall)
$testfall1 = 1;
$ergebnis1 = istPrimzahl($testfall1);
echo "Testfall 1 - Ist $testfall1 eine Primzahl? " . ($ergebnis1 ? "Ja" : "Nein") . "\n";

// Testfall 2: Überprüfung einer kleinen Primzahl
$testfall2 = 3;
$ergebnis2 = istPrimzahl($testfall2);
echo "Testfall 2 - Ist $testfall2 eine Primzahl? " . ($ergebnis2 ? "Ja" : "Nein") . "\n"; // Erwartetes Ergebnis: Ja

// Testfall 3: Überprüfung einer kleinen Nicht-Primzahl
$testfall3 = 4;
$ergebnis3 = istPrimzahl($testfall3);
echo "Testfall 3 - Ist $testfall3 eine Primzahl? " . ($ergebnis3 ? "Ja" : "Nein") . "\n"; // Erwartetes Ergebnis: Nein

// Testfall 4: Überprüfung einer größeren Primzahl
$testfall4 = 13;
$ergebnis4 = istPrimzahl($testfall4);
echo "Testfall 4 - Ist $testfall4 eine Primzahl? " . ($ergebnis4 ? "Ja" : "Nein") . "\n"; // Erwartetes Ergebnis: Ja

// Testfall 5: Überprüfung einer größeren Nicht-Primzahl
$testfall5 = 15;
$ergebnis5 = istPrimzahl($testfall5);
echo "Testfall 5 - Ist $testfall5 eine Primzahl? " . ($ergebnis5 ? "Ja" : "Nein") . "\n"; // Erwartetes Ergebnis: Nein

