<?php
$name = $_GET["h"];
if (empty($name)){
    echo "Nazwisko is empty";
} else {
    $ddd= sha1($name);
    echo $ddd."<br>";
}
$imie = $_GET["i"];
if (empty($name)){
    echo "Imie is empty";
} else {
    echo $imie."<br>";
}
    $con = new mysqli('127.0.0.1', 'root', '', 'haslo');
   //$q="INSERT INTO szyfr (LP,haslo,hash) values('','$imie','$ddd')";
   $q="SELECT haslo, hash from szyfr where login='".$imie."'";
    $add = mysqli_query($con, $q);
 
    while($row = mysqli_fetch_array($add))
 
    {echo $row['login'] . " " . $row['haslo']; echo "<br>";
    $fff=$row['login'];
    $ggg=$row['haslo'];
} 
if($ddd===$ggg)
{
    echo"haslo jest takie samo";
}
else{    
    echo"haslo nie jest takie same";
}
mysqli_close($con);
?>