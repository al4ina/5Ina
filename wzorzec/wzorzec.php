<?php
$wzorzec='/\d/';
$tekst='mam 4 zeszyty';
if(preg_match($wzorzec,$tekst))
    echo "znaleziono cyfrę <br>";
else
    echo "nie znaleziono cyfry <br>";
echo "znaleziono: ".preg_match_all($wzorzec,$tekst);


$wzorzec='/\d{5}/';
$tekst='telefon 12345';
if(preg_match($wzorzec,$tekst))
    echo "znaleziono cyfrę <br>";
else
    echo "nie znaleziono cyfry <br>";
echo "znaleziono: ".preg_match_all($wzorzec,$tekst)

l
$wzorzec='/\d{2}\-\d{3}/';
$tekst='poczta 34-200 Sucha Beskidzka';
if(preg_match($wzorzec,$tekst))
    echo "znaleziono kod pocztowy <br>";
else
    echo "nie znaleziono kod pocztowy <br>";
echo "znaleziono: ".preg_match_all($wzorzec,$tekst);




$wzorzec='/([0123]?\d)+[-\.\/]+([01]?\d])+[-\.\/]+(\d{4})/';
$tekst='dn 04.10.2023';
if(preg_match($wzorzec,$tekst))
    echo "znaleziono datę <br>";
else
    echo "nie znaleziono datę <br>";
echo "znaleziono: ".preg_match_all($wzorzec,$tekst);

$wzorzec='/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst='https//www.adres.pl';
if(preg_match($wzorzec,$tekst))
    echo "znaleziono adres www <br>";
    
else
    echo "nie znaleziono email <br>";
echo "znaleziono: ".preg_match_all($wzorzec,$tekst);
?>

