<?php
// Zapnutí chyb, abychom viděli, co je špatně
ini_set('display_errors', '1');
error_reporting(E_ALL);

$vzkaz = "Zatím jsi nic neodeslal.";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jmeno = $_POST['uzivatel'] ?? 'Neznámý';
    $vzkaz = "Ahoj, " . htmlspecialchars($jmeno) . "!";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Test PHP</title>
</head>

<body>
    <h1>Můj PHP Test</h1>
    <p><strong>Status:</strong> <?php echo $vzkaz; ?></p>

    <form method="POST">
        <input type="text" name="uzivatel" placeholder="Tvé jméno">
        <button type="submit">Odeslat</button>
    </form>
</body>

</html>