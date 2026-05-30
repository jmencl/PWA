<?php
    function jeLiProst($n){

        if($n < 2)
            return false;

        for($i = 2; $i <= sqrt($n); $i++){
            if($n % $i == 0){
                return false;
            }
        }

        return true;
    }

    $unos = 0;

    if(isset($_GET["unos"]))
        $unos = $_GET["unos"];
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 4-4</title>
</head>
<body>
    <main>
        <form action="vjezba4-4.php" method="get">
            <fieldset>
                <legend>Ispisujemo sve proste brojeve manje od unesenog broja</legend>
                <input type="text" name="unos">
                <button type="submit">Kreni</button>
            </fieldset>
        </form>

        <p><?php 
            for($i = 2; $i < $unos; $i++){
                if(jeLiProst($i))
                    echo $i . " ";
            }
        ?></p>
    </main>
</body>
</html>