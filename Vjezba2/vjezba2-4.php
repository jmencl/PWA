<?php
$a = isset($_GET["a"]) ? $_GET["a"] : "";
$b = isset($_GET["b"]) ? $_GET["b"] : "";
$c = "";

if ($a !== "" && $b !== "") {
    $c = (3 * $a - $b) / 2;
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Zadatak 2-4</title>
</head>
<body>

<h2>Izračun vrijednosti c</h2>

<form method="get">
    <label>
        Vrijednost a:
        <input type="number" name="a" value="<?php echo $a; ?>">
    </label>
    <br><br>

    <label>
        Vrijednost b:
        <input type="number" name="b" value="<?php echo $b; ?>">
    </label>
    <br><br>

    <button type="submit">Pošalji</button>
</form>

<?php if ($c !== ""): ?>
    <p>Vrijednost c je: <strong><?php echo $c; ?></strong></p>
<?php endif; ?>

</body>
</html>