<?php

declare(strict_types=1);

/**
 * Nadefinujte si pole deseti celých čísel.
 *
 * 2. Doplňte nakonec tohoto pole další číslo, které se zadá z klávesnice.
 *
 * 3. Vypište údaj o počtu prvků v tomto poli.
 *
 * 4. Pomocí cyklu vypište všechny prvky tohoto pole od posledního k prvnímu.
 *
 * 5. Zjistěte, zda v tomto poli se vyskytuje hodnota 1, v případě, že ano, zjistěte, kolikrát se vyskytuje.
 *
 * 6. Určete maximum a vypište ho.
 *
 * 7. Každý sudý prvek tohoto pole zvětšete o 10.
 *
 * 8. Vypište toto pole pomocí cyklu foreach.
 *
 * 9. Vynechejte 2 řádky.
 *
 * 10. Vytvořte další pole, do kterého budete z klávesnice zadávat celá čísla, zadávání se ukončí v případě, že se zadá -1, tento prvek už nebude součástí pole.
 *
 * 11. Vypište, o kolik prvků má více, méně, nebo zda má stejný počet prvků toto pole oproti prvnímu poli.
 *
 * 12. Vypište střídavě prvky těchto polí: prvek_z_prvního prvek_z_druhého prvek_z_prvního prvek_z_druhého atd.
 *
 * 13. Vypište z prvního pole všechna sudá a z druhého pole všechna lichá čísla.
 */

// 1. Nadefinujte si pole deseti celých čísel
$pole1 = [1, 5, 8, 12, 1, 45, 6, 10, 3, 22];

// 2. Doplňte nakonec tohoto pole další číslo, které se zadá z klávesnice
echo "Zadejte cele cislo k pridani do pole: ";
$vstup = (int)readline();
$pole1[] = $vstup; // Alternativně array_push($pole1, $vstup);

// 3. Vypište údaj o počtu prvků v tomto poli
echo "Pocet prvku v poli: " . count($pole1) . "\n";

// 4. Pomocí cyklu vypište všechny prvky od posledního k prvnímu
echo "Prvky od konce: ";
for ($i = count($pole1) - 1; $i >= 0; $i--) {
    echo $pole1[$i] . " ";
}
echo "\n";

// 5. Zjistěte, zda se v poli vyskytuje hodnota 1 a kolikrát
$pocetJednicek = 0;
foreach ($pole1 as $hodnota) {
    if ($hodnota === 1) {
        $pocetJednicek++;
    }
}
if ($pocetJednicek > 0) {
    echo "Hodnota 1 se v poli vyskytuje $pocetJednicek krát.\n";
} else {
    echo "Hodnota 1 v poli neni.\n";
}

// 6. Určete maximum a vypište ho
$max = max($pole1);
echo "Maximum v poli je: $max\n";

// 7. Každý sudý prvek tohoto pole zvětšete o 10
// Použijeme referenci (&), abychom změnili hodnotu přímo v poli
foreach ($pole1 as &$prvek) {
    if ($prvek % 2 === 0) {
        $prvek += 10;
    }
}
unset($prvek); // Zrušení reference (dobrá praxe)

// 8. Vypište toto pole pomocí cyklu foreach
echo "Upravene pole (sudy prvek + 10): ";
foreach ($pole1 as $p) {
    echo $p . " ";
}
echo "\n";

// 9. Vynechejte 2 řádky
echo "\n\n";

// 10. Vytvořte další pole, zadávání z klávesnice ukončené -1
$pole2 = [];
echo "Zadavani do druheho pole (ukoncete zadanim -1):\n";
while (true) {
    $vstup2 = (int)readline("Zadej cislo: ");
    if ($vstup2 === -1) {
        break;
    }
    $pole2[] = $vstup2;
}

// 11. Vypište porovnání počtu prvků
$count1 = count($pole1);
$count2 = count($pole2);
if ($count2 > $count1) {
    echo "Druhe pole ma o " . ($count2 - $count1) . " prvku vice nez prvni.\n";
} elseif ($count2 < $count1) {
    echo "Druhe pole ma o " . ($count1 - $count2) . " prvku mene nez prvni.\n";
} else {
    echo "Obě pole mají stejný počet prvků.\n";
}

// 12. Vypište střídavě prvky těchto polí
echo "Stridavy vypis: ";
$maxPocet = max($count1, $count2);
for ($i = 0; $i < $maxPocet; $i++) {
    if (isset($pole1[$i])) {
        echo $pole1[$i] . " ";
    }
    if (isset($pole2[$i])) {
        echo $pole2[$i] . " ";
    }
}
echo "\n";

// 13. Vypište z prvního pole sudá a z druhého lichá čísla
echo "Suda z 1. pole: ";
foreach ($pole1 as $x) {
    if ($x % 2 === 0) echo $x . " ";
}
echo "\nLicha z 2. pole: ";
foreach ($pole2 as $y) {
    if ($y % 2 !== 0) echo $y . " ";
}
echo "\n";
