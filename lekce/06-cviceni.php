<?php

declare(strict_types=1);

/*
========================================
    PROCVIČOVÁNÍ ZÁKLADŮ PHP
    2. ročník – funkce, podmínky, cykly
========================================

Instrukce:
- Každý úkol řešte úpravou příslušné funkce.
- Neměňte názvy funkcí ani parametry.
- U každé funkce dole vytvořte alespoň 2 testovací volání.
- Používejte typové deklarace.
- Pište přehledný a odsazený kód.
*/


/*
----------------------------------------
1) Sudé nebo liché číslo
----------------------------------------
Vraťte true, pokud je číslo sudé.
Vraťte false, pokud je liché.
Použijte operátor %.
*/

$cislo = 9;

function jeSude(int $cislo): bool
{
    return $cislo % 2 === 0;
}

echo "je sude cislo {$cislo} => " . (jeSude($cislo) ? 'true' : 'false') . "\n";


/*
----------------------------------------
2) Kalkulačka
----------------------------------------
Operace může být:
"+", "-", "*", "/"

Pokud dojde k dělení nulou,
vraťte text: "Nelze dělit nulou"
*/


function kalkulacka(float $a, float $b, string $operace): float|string
{
    return match ($operace) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        '/' => $b == 0 ? "Nelze dělit nulou" : $a / $b,
        default => "Neznámá operace"
    };
}

echo "10 + 5 => " . kalkulacka(10, 0, "/") . "\n";


/*
----------------------------------------
3) Největší ze tří čísel
----------------------------------------
Vraťte největší číslo.
Nepoužívejte funkci max().
*/
function nejvetsi(int $a, int $b, int $c): int
{
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

echo "nejvetsi(10, 9, 3) => " . nejvetsi(10, 9, 3) . "\n";
/*
----------------------------------------
4) Součet čísel od 1 do N
----------------------------------------
Spočítejte součet čísel od 1 do $n
pomocí cyklu.
*/
function soucetDoN(int $n): int
{
    $soucet = 0;
    for ($i = 1; $i <= $n; $i++) {
        $soucet += $i;
    }
    return $soucet;
}

echo "soucet cisel od 1 do 5 => " . soucetDoN(5) . "\n";

/*
----------------------------------------
5) Faktoriál čísla
----------------------------------------
Např.:
5! = 5 × 4 × 3 × 2 × 1 = 120

Bonus:
Ošetřete záporné číslo.
*/
function faktorial(int $n): int {}


/*
----------------------------------------
6) Počet sudých čísel v poli
----------------------------------------
Spočítejte, kolik sudých čísel je v poli.
Použijte foreach.
*/
function pocetSudyChCisel(array $pole): int
{
    // TODO: Doplňte řešení
}


/*
----------------------------------------
7) Je student přijat?
----------------------------------------
Podmínky:
- Součet bodů alespoň 60
- Z testu alespoň 25 bodů

Použijte logické operátory.
*/
function jePrijat(int $bodyTest, int $bodyUstni): bool
{
    // TODO: Doplňte řešení
}


/*
----------------------------------------
8) Násobilka
----------------------------------------
Vypište násobilku čísla od 1 do 10.
Použijte cyklus for.

Příklad pro 5:
5 x 1 = 5
5 x 2 = 10
...
*/
function nasobilka(int $cislo): void
{
    // TODO: Doplňte řešení
}


/*
----------------------------------------
9) Obrácení textu
----------------------------------------
Vraťte text pozpátku.
Nepoužívejte strrev().
*/
function obratText(string $text): string
{
    // TODO: Doplňte řešení
}


/*
----------------------------------------
10) Hádání čísla
----------------------------------------
Vraťte:
"Uhodl jsi!"
"Moc malé"
"Moc velké"
*/
function zkontrolujTip(int $tajneCislo, int $tip): string
{
    // TODO: Doplňte řešení
}


/*
----------------------------------------
BONUS (pokud zbyde čas)
----------------------------------------
Zjistěte, zda je číslo prvočíslo.
*/
function jePrvocislo(int $n): bool
{
    // TODO: Doplňte řešení
}


/*
========================================
TESTOVACÍ VOLÁNÍ
(Odkomentujte po dokončení funkcí)
========================================

// var_dump(jeSude(4));
// var_dump(jeSude(7));

// var_dump(kalkulacka(10, 5, "+"));
// var_dump(kalkulacka(10, 0, "/"));

// var_dump(nejvetsi(5, 9, 3));

// var_dump(soucetDoN(5));

// var_dump(faktorial(5));

// var_dump(pocetSudyChCisel([1,2,3,4,6]));

// var_dump(jePrijat(30, 35));
// var_dump(jePrijat(20, 40));

// nasobilka(5);

// var_dump(obratText("PHP"));

// var_dump(zkontrolujTip(50, 30));
// var_dump(zkontrolujTip(50, 50));

// var_dump(jePrvocislo(7));

*/