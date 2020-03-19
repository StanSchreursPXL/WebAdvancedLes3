<?php
//var_dump($_GET['getallen']);
$getallen = $_GET['getallen'];

foreach ($getallen as $invoer) {
    if (is_numeric($invoer)) {
        $correcte_getallen[] = (int)$invoer;
    } else {
        $ongeldige_waardes[] = $invoer;
    }
}
print("gemiddelde waarde: " . array_sum($correcte_getallen)/count($correcte_getallen) . "</br>");
print("laagste getal: " . min($correcte_getallen) . "</br>");
print("hoogste getal: " . max($correcte_getallen) . "</br>");

if (isset($ongeldige_waardes)) {
    foreach ($ongeldige_waardes as $ongeldige_waarde) {
        print("ongeldige waarde: " . $ongeldige_waarde . "</br>");
    }
}