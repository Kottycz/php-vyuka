<?php
if (!empty($_GET)) {
    // 1. Načtení čísel
    $c1 = (float)($_GET['cislo1'] ?? 0);
    $c2 = (float)($_GET['cislo2'] ?? 0);
    $c3 = (float)($_GET['cislo3'] ?? 0);

    // 2. Logika pro checkboxy (Bod 3 v zadání)
    $v1 = $_GET['vyber1'] ?? null;
    $v2 = $_GET['vyber2'] ?? null;
    $v3 = $_GET['vyber3'] ?? null;

    $vypisCisla = "";
    if ($v1) $vypisCisla .= $c1 . "<br>";
    if ($v2) $vypisCisla .= $c2 . "<br>";
    if ($v3) $vypisCisla .= $c3 . "<br>";

    if ($vypisCisla === "") {
        $vypisCisla = "neoznačeno";
    }

    // 3. Logika pro operaci (Bod 4 v zadání - pouze pro první a druhé číslo!)
    $operace = $_GET['operace'];
    $vysledekMatika = 0;
    $symbol = "";

    if ($operace === "plus") {
        $vysledekMatika = $c1 + $c2;
        $symbol = "+";
    } elseif ($operace === "minus") {
        $vysledekMatika = $c1 - $c2;
        $symbol = "-";
    } elseif ($operace === "krat") {
        $vysledekMatika = $c1 * $c2;
        $symbol = "*";
    } elseif ($operace === "deleno") {
        $symbol = "/";
        $vysledekMatika = ($c2 != 0) ? ($c1 / $c2) : "Nelze dělit nulou";
    }

    // 4. Logika pro radio (Bod 5 v zadání)
    $porovnani = $_GET['porovnani'] ?? "";
    $textPorovnani = "";

    if ($porovnani === "porovnej-1-3") {
        $textPorovnani = ($c1 > $c3) ? "první číslo ($c1) je větší než třetí ($c3)" : "první číslo ($c1) je menší nebo rovno třetímu ($c3)";
    } elseif ($porovnani === "porovnej-1-2") {
        $textPorovnani = ($c1 > $c2) ? "první číslo ($c1) je větší než druhé ($c2)" : "první číslo ($c1) je menší nebo rovno druhému ($c2)";
    } elseif ($porovnani === "porovnej-2-3") {
        $textPorovnani = ($c2 > $c3) ? "druhé číslo ($c2) je větší než třetí ($c3)" : "druhé číslo ($c2) je menší nebo rovno třetímu ($c3)";
    }

    // 5. Samotný výpis výsledků
    echo "<div style='background: #e0f7fa; padding: 15px; border: 1px solid #ffffff; margin-bottom: 20px;'>";
    echo "<strong>Vybraná čísla:</strong><br> $vypisCisla <br>";
    echo "<strong>Výpočet (1. a 2. číslo):</strong> $c1 $symbol $c2 = $vysledekMatika <br>";
    echo "<strong>Porovnání:</strong> $textPorovnani";
    echo "</div>";
}


?>

<!DOCTYPE html>
<html lang="cz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET">
        <label for="c1">Číslo 1.:</label>
        <input type="number" name="cislo1" id="c1" required><br>

        <label for="c2">Číslo 2.:</label>
        <input type="number" name="cislo2" id="c2" required><br>

        <label for="c3">Číslo 3.:</label>
        <input type="number" name="cislo3" id="c3" required><br><br>

        <label for="v1">první</label>
        <input type="checkbox" name="vyber1" id="v1"><br>

        <label for="v2">druhý</label>
        <input type="checkbox" name="vyber2" id="v2"><br>

        <label for="v3">třetí</label>
        <input type="checkbox" name="vyber3" id="v3"><br><br>

        <label for="vyber">operace</label>
        <select name="operace" id="vyber">
            <option value="plus">Plus</option>
            <option value="minus">Mínus</option>
            <option value="krat">Krát</option>
            <option value="deleno">Děleno</option>
        </select><br><br>

        <label>
            <input type="radio" name="porovnani" value="porovnej-1-3" required> Porovnej 1-3
        </label>

        <label>
            <input type="radio" name="porovnani" value="porovnej-1-2"> Porovnej 1-2
        </label>

        <label>
            <input type="radio" name="porovnani" value="porovnej-2-3"> Porovnej 2-3
        </label><br><br>

        <button type="submit">Odeslat</button>
    </form>
</body>

</html>