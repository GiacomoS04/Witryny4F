<!DOCTYPE html>
<html lang="pl">

<head>
   
    <title>platki</title>

<style>

body{

background-color: pink;

}

h1{

color: darkblue;




}

#btnSub{

    background-color: darkblue;
    color: white;
    font-weight: bold; 
    

}


LABEL{
    color: darkblue;
    font-weight: bold; 
}



    </style>



</head>

<body>

<form method="post">

    <center><h1>DODAJ PŁATKI</h1>



 <label for="rodzaj">Rodzaj platkow</label><br>  <br>

    <select name="rodzaj" id="rodzaj">

   <option value="owsiane">owsiane</option>
   <option value="kukurydziane">kukurydziane</option>
   <option value="zytnie">zytnie</option>
   

    </select><br><br>  

    Producent<br>
    <input type="text" name="producent"><br>  <br>

    Smak<br>
    <input type="text" name="smak"><br>  <br>

    <br>
    <br>
    <br>
   


    <input type="submit" id="btnSub" name="btnSub" value="przeslij">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $rodzaj = $_POST["rodzaj"];
    $producent = $_POST["producent"];
    $smak = $_POST["smak"];
 
    $xmlFile = 'platki.xml';
    if (file_exists($xmlFile)) {

        $xml = simplexml_load_file($xmlFile);
 
        $newData = $xml->addChild('sklep');
        $newData->addChild('rodzaj', $rodzaj);
        $newData->addChild('producent', $producent);
        $newData->addChild('smak', $smak);
 
        $xml->asXML($xmlFile);
 
    } else {
        $xml = new SimpleXMLElement('<platki></platki>');
        $person = $xml->addChild('sklep');
        $person->addChild('rodzaj', $rodzaj);
        $person->addChild('producent', $producent);
        $person->addChild('smak', $smak);
 
        $xml->asXML($xmlFile);
 
    }
}
?>
</body>
</html>