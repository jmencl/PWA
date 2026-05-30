<?php

function ducan($stanje = "otvoren"){
    echo "Ducan je $stanje";
}

// trenutno vrijeme i dan
$sat = date("G");      // sat (0-23)
$dan = date("N");      // dan u tjednu (1=pon, 7=ned)


$blagdani = array("01-01", "12-25", "05-01"); 
$danas = date("m-d");


if (in_array($danas, $blagdani)) {
    ducan("zatvoren");

} else if ($dan == 7) {
    // nedjelja
    ducan("zatvoren");

} else if ($dan == 6) {
    // subota
    if ($sat >= 9 && $sat < 14) {
        ducan();
    } else {
        ducan("zatvoren");
    }

} else {
    // radni dan
    if ($sat >= 8 && $sat < 20) {
        ducan();
    } else {
        ducan("zatvoren");
    }
}

?>