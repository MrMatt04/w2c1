<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <title>mew</title>
</head>
<body>
    <script src="script.js"></script>

    

    <?php
    
    

     //if($_SERVER["REQUEST_METHOD"] == "GET"){
        $vnaam = $_GET["vnaam"];
        $tussen = $_GET["tussen"];
        $anaam = $_GET["anaam"];
        $leeftijd = $_GET["leeftijd"];
        $kleur = $_GET["kleur"];
        echo "$vnaam  $tussen $anaam ";
        echo $leeftijd * 4;  
     //}   

     /*switch ($kleur) {
        case "rood":
            $background = "red";
            break;
        case "groen":
            $background = "green";
            break;
        case "blauw":
            $background = "blue";
            break;
        case "geel":
            $background = "yellow";
             break;
        case "oranje":
            $background = "orange";
          break;
        case "paars":
            $background = "puple";
            break;
    
        }
        echo $background*/
    
        
     

        ?>
    
    

</body>
</html>