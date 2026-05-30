<?php
$poruka = "";
$boja = "";
$randomBroj = rand(1, 9);

if (isset($_GET["broj"])) {
    $unos = $_GET["broj"];

    if ($unos == $randomBroj) {
        $poruka = "Pogođeno, probaj ponovo!";
        $boja = "green";
    } else {
        $poruka = "Krivo, probaj ponovo!";
        $boja = "red";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Igra</title>
</head>
<body>

<p>Igra (pogodi broj)</p>

<form method="get">
    Upiši broj (1-9):
    <input type="number" name="broj">
    <button type="submit" style="background-color: <?php echo $boja; ?>; color:white;">
        <?php echo $poruka != "" ? $poruka : "Pošalji"; ?>
    </button>
</form>

<p>Zamišljeni broj je: <?php echo $randomBroj; ?></p>

</body>
</html>