<?php
$getal=$_GET['getal'];
if(ctype_digit($getal) && (int)$getal>0) {
    print ("De faculteit van " . $getal . " is " . require_once ('wiskunde.php'));
} else {
    print("ongeldige invoer: " . $getal);
}