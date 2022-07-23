<?php
// ## Snack 2
// Passare come parametri GET name, mail e age e verificare
// (cercando i metodi che non conosciamo nella documentazione)
// che name sia più lungo di 3 caratteri, che mail contenga un punto
// e una chiocciola e che age sia un numero. Se tutto è ok stampare
// “Accesso riuscito”, altrimenti “Accesso negato”

    $userName = $_GET["name"];
    $userMail = $_GET["mail"];
    $userAge = $_GET["age"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <?php
        if(strlen($userName) > 3 &&
        strpos($userMail, "@") !== false &&
        strpos($userMail, ".") !== false &&
        is_numeric($userAge) !== false) { ?>
        
        <span>Accesso riuscito</span>
    
    <?php } else { ?>

        <span>Accesso negato</span>
    
    <?php } ?>
</body>
</html>