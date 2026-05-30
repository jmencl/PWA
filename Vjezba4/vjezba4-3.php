<?php 
    $ulazniNiz = "";
    $brojRijeci = 0;
    
    if (isset($_GET["recenica"])){
        $ulazniNiz = $_GET["recenica"];
        $brojRijeci = str_word_count($_GET["recenica"]);
    }
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 4-3</title>
</head>
<body>
    <main style="margin-right:75%">
        <form action="vjezba4-3.php" method="get">

            <fieldset>
                <legend>Ulazni niz:</legend>
                <input type="text" name="recenica">
            </fieldset>
            <br>
            <button type="submit">ispiši broj riječi</button>

        </form>
        <p>ulazni niz: <?php echo $ulazniNiz . " sadrži " . $brojRijeci . " riječi." ?></p>
    </main>
</body>
</html>