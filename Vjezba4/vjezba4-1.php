<?php
$cars = array("Audi", "BMW", "Renault", "Citroen");
$odabraniAuto = "";

if (isset($_GET["car"])) {
    $odabraniAuto = $_GET["car"];
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Vjezba 4-1</title>
</head>
<body>

<h2>Lista vozila:</h2>

<ul>
<?php
foreach ($cars as $car) {
    echo "<li>$car</li>";
}
?>
</ul>

<form method="get" action="vjezba4-1.php">
    <fieldset>
        <legend>Označi vozilo</legend>

        <?php foreach ($cars as $car): ?>
            <label>
                <input type="radio" name="car" value="<?php echo $car; ?>"
                <?php echo $odabraniAuto === $car ? "checked" : ""; ?>>
                <?php echo $car; ?>
            </label><br>
        <?php endforeach; ?>

    </fieldset>

    <button type="submit">Pošalji</button>
</form>

<?php
if ($odabraniAuto != "") {
    echo "<p>Odabrali ste: <strong>$odabraniAuto</strong></p>";
}
?>

</body>
</html>