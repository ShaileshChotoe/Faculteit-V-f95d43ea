<?php

$j;
$getal;
$result;


echo "Van welk getal wil je de faculteit weten? ";

$getal = readline();


BerekenFaculteit($getal);


function BerekenFaculteit($getal)
{

    $result = 1;

    echo "\n" . "\n" . "\n";

    $a = 0;

    while ($a < $getal)
    {
      $result = $result * ($a + 1);
      $a = $a + 1;
    }


    echo "De faculteit van " . $getal . ' = ' . $result;

    echo "\n" . "\n" . "\n";


}



 ?>
