<?php
$imie = $_GET["imie"];
if (empty($imie)){
    echo "Nazwisko is empty";
} else {
    echo $imie."<br>";
}
$nazwisko = $_GET["nazwisko"];
if (empty($nazwisko)){
    echo "nazwisko is empty";
} else {
    echo $nazwisko."<br>";
}
$klasa = $_GET["klasa"];
if (empty($klasa)){
    echo "klasa is empty";
} else {
    echo $klasa."<br>";
}
$srednia = $_GET["srednia"];
if (empty($srednia)){
    echo "srednia is empty";
} else {
    echo $srednia."<br>";
}
    $con = new mysqli('127.0.0.1', 'root', '', 'uczen_piatek');
    $q="DELETE FROM klasy WHERE=$imie,$nazwisko,$klasa,$srednia)";
    $con->close();
?>