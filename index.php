<?php

include('ape.php');

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->legs; // 2
echo $sheep->cold_blooded; // false
echo "<br>";


$kodok = new Frog ("buduk");
echo $kodok->jump() ; // "hop hop"

echo "<br>";


$sungokong = new Ape("kera sakti");
echo $sungokong->yell() // "Auooo"
?>