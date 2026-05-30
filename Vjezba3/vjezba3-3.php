<?php
$poruka = "";

if (isset($_GET["o1"]) && isset($_GET["o2"])) {
    $o1 = $_GET["o1"];
    $o2 = $_GET["o2"];

    $ocjene = array($o1, $o2);

    // provjera raspona
    if ($o1 < 1 || $o1 > 5 || $o2 < 1 || $o2 > 5) {
        $poruka = "Ocjene moraju biti između 1 i 5!";
    }
    // ako je jedna negativna (1)
    elseif ($o1 == 1 || $o2 == 1) {
        $poruka = "Konačna ocjena: 1";
    }
    else {
        $prosjek = array_sum($ocjene) / count($ocjene);
        $poruka = "Prosjek: " . $prosjek;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
body { font-family: Arial; }
.box {
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
}
</style>
</head>
<body>

<div class="box">
<h3>Izračun ocjene</h3>

<form method="get">
    Ocjena 1:
    <input type="number" name="o1"><br><br>

    Ocjena 2:
    <input type="number" name="o2"><br><br>

    <button type="submit">POŠALJI</button>
</form>

<p><?php echo $poruka; ?></p>
</div>

</body>
</html>