<?php

declare(strict_types=1);

/*
==================================================
    PROCVIČOVÁNÍ PHP – LEKCE 3 (pokročilejší)
    Matematika
==================================================

Instrukce:
· Nastavte si 3 strany do proměnných $a, $b, $c
· Zobrazte nastavené hodnoty na stránce (a = 10 cm, …)
· Určete, zda tento trojúhelník lze sestrojit, v případě, že nelze, vypíše se: trojúhelník nelze sestrojit a ukončí se vše
· Určete, zda tento trojúhelník je rovnostranný, rovnoramenný, nebo obecný a vypište.
· Vynechte dva řádky, provede se výpočet obvodu a obsahu (použijte Heronův vzorec 𝑆=√𝑠(𝑠−𝑎)(𝑠−𝑏)(𝑠−𝑐), kde 𝑠=𝑎+𝑏+𝑐2) podle zadání (odmocnina je sqrt($cislo)) a vypíše se: obvod (obsah) je hodnota
*/




/*
----------------------------------------------------
DALŠÍ ÚKOLY
----------------------------------------------------

5) Vytvořte funkci getTriangleAngleType($a, $b, $c),
   která určí typ trojúhelníku podle úhlů:

   - pravoúhlý
   - ostroúhlý
   - tupoúhlý

   Postup:
   Najděte nejdelší stranu (označte ji c).

   Porovnejte:

   c² ? a² + b²

	   c² = a² + b² → pravoúhlý
   c² < a² + b² → ostroúhlý
   c² > a² + b² → tupoúhlý

   Funkce vrátí text s typem trojúhelníku.

----------------------------------------------------
*/


/*
6) Vytvořte funkci getHeightToA($a, $content),
   která vypočítá výšku na stranu a.

Použijte vzorec:

   v_a = (2 * S) / a

   Funkce vrátí výšku.

   */



function getHeightToA(float $a, float $obsah): float
{
    $v_a = (2 * $obsah) / $a;
    return $v_a;
}

echo getHeightToA(5, 25);


/*
----------------------------------------------------

7) Vytvořte funkci getAngles($a, $b, $c),
   která vypočítá velikosti úhlů α, β, γ.

Použijte kosinovou větu například pro α:

   cos α = (b² + c² − a²) / (2bc)

   Použijte funkce:
   acos()
   rad2deg()

   Výsledky zaokrouhlete na 2 desetinná místa.

Funkce vrátí pole:

   [
	   'alpha' => ...,
       'beta' => ...,
       'gamma' => ...
   ]

   ----------------------------------------------------

8) Vytvořte funkci getMinMaxSide($a, $b, $c),
   která vrátí nejdelší a nejkratší stranu.

Funkce vrátí pole:

   [
	   'min' => ...,
       'max' => ...
   ]
*/



function getMinMaxSide(int $a, int $b, int $c): array // Změněno na array
{
    // Předpokládejme na začátku, že první číslo je rovnou max i min
    $max = $a;
    $min = $a;

    // Hledáme maximum
    if ($b > $max) {
        $max = $b;
    }
    if ($c > $max) {
        $max = $c;
    }

    // Hledáme minimum
    if ($b < $min) {
        $min = $b;
    }
    if ($c < $min) {
        $min = $c;
    }

    // Vracíme obě hodnoty v poli
    return [
        'max' => $max,
        'min' => $min
    ];
}

// Jak to správně vypsat (využijeme tvou znalost destrukturalizace ze 4. lekce):
['max' => $mojeMax, 'min' => $mojeMin] = getMinMaxSide(10, 2, 7);

echo "Největší strana je: {$mojeMax}\n";
echo "Nejmenší strana je: {$mojeMin}\n";

/*
====================================================
FUNKCE – DOPLŇTE ŘEŠENÍ
====================================================
*/
/*
function getTriangleAngleType(float $a, float $b, float $c): string
{

    $x = "Tupoúhlý";
    $y = "Ostroúhlý";
    $z = "Pravouhlý";

    if ($a >= $b && $a >= $c) {
        $c = $a;
        $a = $b;
        $b = $c;
    } elseif ($b >= $a && $b >= $c) {
        $c = $b;
        $b = $a;
        $a = $c;
    } else {
        // c je již nejdelší strana
    }

    if ($a + $b >= $c && $a + $c >= $b && $b + $c >= $a) {
        if ($c ** 2 == $a ** 2 + $b ** 2) {
            return $z;
        } elseif ($c ** 2 < $a ** 2 + $b ** 2) {
            return $y;
        } elseif ($c ** 2 > $a ** 2 + $b ** 2) {
            return $x;
        }
    } else {
        return "Trojuhelnik nelze sestrojit";
    }

    echo "Strany trojuhelnika: a={$a} cm, b={$b} cm, c={$c} cm \n";
}

echo getTriangleAngleType(4, 5, 3) . "\n";
*/