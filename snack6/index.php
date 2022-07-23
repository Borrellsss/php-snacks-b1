<?php
// ## Snack 6
// Creare un array contenente qualche alunno di un’ipotetica classe.
// Ogni alunno avrà Nome, Cognome e un array contenente i
// suoi voti scolastici. Stampare Nome, Cognome e la
// media dei voti di ogni alunno.

    $students = [
        [
            "name" => "Edoardo",
            "lastName" => "Borrello",
            "grades" => [6, 4, 8, 9, 5, 6, 0]
        ],
        [
            "name" => "Andrea",
            "lastName" => "Giacchi",
            "grades" => [10, 9, 8, 9, 2, 10, 10]
        ],
        [
            "name" => "Laura",
            "lastName" => "Lessi",
            "grades" => [5, 9, 9, 9, 10, 7, 9]
        ],
        [
            "name" => "Francesca",
            "lastName" => "Franca",
            "grades" => [10, 10, 10, 10, 9, 10, 9]
        ],
        [
            "name" => "Luca",
            "lastName" => "Rossi",
            "grades" => [5, 5, 5, 5, 5, 4, 6]
        ],
        [
            "name" => "Franco",
            "lastName" => "Neri",
            "grades" => [0, 6, 3, 5, 4, 1, 0]
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Students</h2>
    <div>
        <?php for($i = 0; $i < count($students); $i++) { ?>
            <?php $thisStudent = $students[$i]; ?>
            <?php $averageVote = array_sum($thisStudent["grades"]) / count($thisStudent["grades"]); ?>
            <?php $averageRoundedVote = ceil($averageVote); ?>
            <div class="student <?php if($averageRoundedVote > 5) { echo good; } else { echo bad; } ?>">
                <div>
                    Name:
                    <?php echo $thisStudent["name"]; ?>   
                </div>
                <div>
                    LastName:
                    <?php echo $thisStudent["lastName"]; ?>   
                </div>
                <div>
                    Average Vote:
                    <?php echo $averageRoundedVote; ?>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>