<?php
$naam = $_GET['naam'];
$kleur = $_GET['kleur'];
setcookie('naam', $naam);
setcookie('kleur', $kleur);
header("Location: toon.php");