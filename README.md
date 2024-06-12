Zu testender Code:
php
Copiar código
function ist_gerade($zahl)
{
if ($zahl % 2 == 0) {
return true;
} else {
return false;
}
}
Schritte des White-Box-Testens:
Verständnis des Codes:

Die Funktion ist_gerade prüft, ob eine Zahl ($zahl) gerade ist.
Wenn die Zahl ohne Rest durch 2 teilbar ist ($zahl % 2 == 0), 
wird true zurückgegeben.
Andernfalls wird false zurückgegeben.
Identifikation der möglichen Pfade:

Pfad 1: $zahl % 2 == 0 (gerade Zahl)
Pfad 2: $zahl % 2 != 0 (ungerade Zahl)
Schreiben der Testfälle:

Test 1: Überprüfen, ob eine gerade Zahl true zurückgibt.
Test 2: Überprüfen, ob eine ungerade Zahl false zurückgibt.
Test 3: Überprüfen mit Null (Sonderfall, sollte true zurückgeben).
Testfälle:
php
Copiar código
// Test 1: Gerade Zahl
assert(ist_gerade(4) === true); // Erwartet true

// Test 2: Ungerade Zahl
assert(ist_gerade(3) === false); // Erwartet false

// Test 3: Null
assert(ist_gerade(0) === true); // Erwartet true
Implementierung in PHP:
php
Copiar código
function ist_gerade($zahl)
{
if ($zahl % 2 == 0) {
return true;
} else {
return false;
}
}

// Testfälle
assert(ist_gerade(4) === true); // Erwartet true
assert(ist_gerade(3) === false); // Erwartet false
assert(ist_gerade(0) === true); // Erwartet true

echo "Alle Tests bestanden.\n";
Erwartetes Ergebnis:
Wenn du den obigen Code ausführst, sollten alle Tests erfolgreich durchlaufen und "Alle Tests bestanden." ausgegeben werden.

Meinung:
Dieser einfache Test stellt sicher, dass die Funktion mit verschiedenen Eingaben korrekt funktioniert. Trotz der Einfachheit deckt er alle möglichen Pfade innerhalb der Funktion ab.