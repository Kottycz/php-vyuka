<?php

declare(strict_types=1);

/**
 * 1. Do dvou proměnných zadejte hodnotu začátku a konce intervalu (např. $a=10, $b=150)
 * 2. Pomocí cyklu zjistěte počet lichých čísel v tomto intervalu a vypište tuto informaci.
 * 3. Dále zjistěte, kolik čísel končí číslicí 1 nebo 7 a vypište tuto hodnotu.
 * 4. Do pole uložte všechny hodnoty, pro které platí v daném intervalu všechny tyto podmínky:
 * - trojciferné číslo
 * - dělitelné 5
 * - je menší než 500
 * (může nastat případ, že pole bude prázdné)
 * 5. Vypište pomocí foreach prvky tohoto pole, v případě, že pole je prázdné, vypište tuto informaci.
 */

$a = 10;
$b = 150;
$pocetL = 0;
$pocetS = 0;
$pocet1 = 0;
$pocet7 = 0;


for ($i = $a; $i <= $b; $i++) {
    if ($i % 2 == 0) {
        $pocetS++;
    } else {
        $pocetL++;
    }
    if ($i % 10 == 1) {
        $pocet1++;
    } elseif ($i % 10 == 7) {
        $pocet7++;
    }
}
echo "Pocet sudych: {$pocetS}\nPocet lichych: {$pocetL}";
echo "\nPocet cisel koncicich 1: {$pocet1}\nPocet cisel koncicich 7: {$pocet7}\n\n\n";


$vybranaCisla = []; // Inicializace prázdného pole

// 4. Procházení intervalu a ukládání hodnot podle podmínek
for ($i = $a; $i <= $b; $i++) {
    if (
        $i >= 100 && $i <= 999 && // trojciferné číslo
        $i % 5 == 0 &&            // dělitelné 5
        $i < 500                  // menší než 500
    ) {
        $vybranaCisla[] = $i;      // Přidání do pole
    }
}

// 5. Výpis pomocí foreach s kontrolou prázdnosti
echo "Výsledky hledání:\n";

if (empty($vybranaCisla)) {
    echo "Pole je prázdné, žádné číslo nevyhovuje podmínkám.";
} else {
    foreach ($vybranaCisla as $cislo) {
        echo $cislo . " ";
    }
}
echo "\n";
