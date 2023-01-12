<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] =="POST"){ 
        $email = $_POST["email"];
        $password = $_POST["password"];
    }

    if($email == "test@test.nl") {
        if($password == "tEst") {
            echo "Je hebt toegang tot deze pagina.";
    
        }
        else {
            echo "Je hebt geen toegang tot deze pagina.";
        }

    }
    else {
        echo "Je hebt geen toegang tot deze pagina.";
    }
?>
    
</body>
</html>