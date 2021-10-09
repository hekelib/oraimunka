<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>egerock</title>
</head>
<body>
    <h1>Üdvözöllek!</h1>
    <form action="index.php" method="POST">                           <!--html űrlap létrehozása-->
        <input type="number" name="number1"><br>
        <input type="submit" value="Elküld">                         <!--gomb nyomásra elküldi a servernek-->
    </form>
    <!--megjegyzés-->
</body>
</html>

<?php
/*$nev="Hekeli Balázs";                                           //változó, $ jellel kezdődik
echo("<h2>Üdvözöllek: $nev, Legyen szép napod!</h2>");          //kiiratás*/

if(isset($_POST['number1']))
{
$ho=$_POST['number1'];

if(!empty($ho))
{
    if($ho<=0){
        echo("Szilárd.");
    }
    else if($ho<100){
        echo("Folyékony.");
    }
    else {
        echo("Légnemű.");
    }
}
else {
    echo("Üres a mező!");
}
}

?>
