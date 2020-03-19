<?php
$getal=$_GET['getal'];
require_once ('wiskunde.php');
if(ctype_digit($getal) && (int)$getal>0) {
    print ("De faculteit van " . $getal . " is " . factorial($getal));
} else {
    print("ongeldige invoer: " . $getal);
}