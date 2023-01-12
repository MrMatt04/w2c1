<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


    <form action="form1results.php" method="GET">
        
            <label for="vnaam">Uw naam:</label><br>
            <input type="text" id="vnaam" name="vnaam" placeholder="Voornaam">
            <input type="text" id="tussen" name="tussen" placeholder="T.V.">
            <input type="text" id="anaam" name="anaam" placeholder="Achternaam"><br>
            <label for="leeftijd">Uw leeftijd</label><br>
            <input type="text" id="leeftijd" name="leeftijd" placeholder="Hoe oud bent u?"><br>
            <label for="kleur">Uw favoriete kleur:</label><br>
            <select name="kleur" id="kleur">
                <option value="rood">rood</option>
                <option value="groen">groen</option>
                <option value="blauw">blauw</option>
                <option value="geel">geel</option>
                <option value="oranje">oranje</option>
                <option value="paars">paars</option>
            </select><br>
            <input type="submit" value="verzend"><br>
</form>

        <form action="form2results.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="verzend">
    </form>
    <?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $vnaam = "test";
    $tussen = "test2";
    $anaam = "test3";
    $leeftijd = "test4";
    $kleur = "test5";



    /*if($_SERVER["REQUEST_METHOD"] == "GET"){
        $vnaam = $_GET["vnaam"];
        $tussen = $_GET["tussen"];
        $anaam = $_GET["anaam"];
        $leeftijd = $_GET["leeftijd"];
        $kleur = $_GET["kleur"];
        echo "<br>$vnaam  $tussen $anaam $leeftijd $kleur";?
    }*/
    ?>

</body>
</html>