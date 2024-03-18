<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,tr{
            border:solid 5px green;
        }
        table:hover,td:hover,tr:hover{
            border:dotted 10px red;
        }
    </style>
</head>
<body>
    <?php
    echo("<table>");
    for($x=0;$x<4;$x++){
        echo("<tr>");
        for($y=0;$y<7;$y++){
            echo("<td><img src='gracjan.jpg' width=100% height=100%></td>");
        }
        echo("</tr>");
    }
    echo("</table>");
    ?>
</body>
</html>