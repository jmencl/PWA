<?php
$rezultat = "";

if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["op"])) {
    $a = $_GET["a"];
    $b = $_GET["b"];
    $op = $_GET["op"];

    switch ($op) {
        case "+":
            $rezultat = $a + $b;
            break;
        case "-":
            $rezultat = $a - $b;
            break;
        case "*":
            $rezultat = $a * $b;
            break;
        case "/":
            $rezultat = $b != 0 ? $a / $b : "Dijeljenje s 0!";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<p>Kalkulator (switch naredba)</p>

<form method="get">
    Prvi broj:
    <input type="number" name="a"><br><br>

    Drugi broj:
    <input type="number" name="b"><br><br>

    <button name="op" value="+">+</button>
    <button name="op" value="-">-</button>
    <button name="op" value="*">*</button>
    <button name="op" value="/">/</button>
</form>

<p>Rezultat: <?php echo $rezultat; ?></p>

</body>
</html>