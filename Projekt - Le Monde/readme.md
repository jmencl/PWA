Provjeriti da se baza spaja na ispravan port.
Zbog već prijašnje zauzetosti porta 3306, ja sam za razvijanje projekta koristio port 3307.
Prije predaje sam kod u datoteci connect.php koji je glasio ovako:
```  
<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "";
$basename = "webprojekt";
$port = 3307;

$dbc = mysqli_connect($servername, $username, $password, $basename, $port);

if (!$dbc) {
    die("Greška kod spajanja na bazu: " . mysqli_connect_error());
}

mysqli_set_charset($dbc, "utf8mb4");
?>
```  
Zamijenio s ovim:  
```  
<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "";
$basename = "webprojekt";
$port = 3306;

$dbc = mysqli_connect($servername, $username, $password, $basename, $port);

if (!$dbc) {
    die("Greška kod spajanja na bazu: " . mysqli_connect_error());
}

mysqli_set_charset($dbc, "utf8mb4");
?>
```  
Dakle port je promijenjen na 3306 - default port za MySQL
Također, ovo je opcija koja bi trebala raditi za neki drugi port koji nije ni 3306 ni 3307:  
```  
<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "";
$basename = "webprojekt";

$dbc = mysqli_connect($servername, $username, $password, $basename);

if (!$dbc) {
    die("Greška kod spajanja na bazu: " . mysqli_connect_error());
}

mysqli_set_charset($dbc, "utf8mb4");
?>
```
