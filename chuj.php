<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="dupa.css"> .
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

    <?php
$con = new mysqli("127.0.0.1","root","","jakos");
$q="SELECT * FROM bedzie";
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo $row["LP"] . ";" . $row["Nazwa"] . ";" . $row["Cena"] . ";" . $row["Opis"] . "<br/>";
else
echo $con->errno . " " . $con->error;
?>

    </div>
</body>
</html>