<?php
require_once ('data/login.php');


//Med følgende sætning laver vi en connection til databasen (husk at host = localhost, så når vi skal live på simply.com, skal dette ændres)
$con = mysqli_connect($host, $username, $password, $database);


//Denne sætning gør, at vi kan acceptere special-karakterer som f.eks. æ, ø og å og udråbstegn osv. Utf8 er en standardpakke med alle specialkarakterer, bogstaver osv.
mysqli_set_charset($con, 'utf8');


//Her undersøger vi, om der kan oprettes forbindelse til serveren. Udråbstegn (!) betyder 'ikke/forskellig fra' dvs. "if !$con", betyder: hvad skal der ske, hvis der ikke er forbindelse?
// hvis ikke der er forbindelse, dvs !$con, så får man en fejlbesked og så "exiter" den. 
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>




