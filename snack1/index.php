<?php
// ## Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra
// di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

    $matchesArray = [
        [
            homeTeam => "Olimpia Milano",
            homeTeamPoints => 55,
            awayTeam => "Cantù",
            awayTeamPoints => 60,
        ],
        [
            homeTeam => "Roma",
            homeTeamPoints => 10,
            awayTeam => "Genova",
            awayTeamPoints => 45,
        ],
        [
            homeTeam => "Cagliari",
            homeTeamPoints => 30,
            awayTeam => "Catania",
            awayTeamPoints => 15,
        ],
        [
            homeTeam => "Livorno",
            homeTeamPoints => 95,
            awayTeam => "Pisa",
            awayTeamPoints => 60,
        ],
        [
            homeTeam => "Venezia",
            homeTeamPoints => 10,
            awayTeam => "Pescara",
            awayTeamPoints => 20,
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <ul>
        <?php if(count($matchesArray) > 0) { ?>
            <?php for($i = 0; $i < count($matchesArray); $i++) { ?>
                <?php $thisMatch = $matchesArray[$i]; ?>
                <li>
                    <?php echo $thisMatch["homeTeam"]; ?> -
                    <?php echo $thisMatch["awayTeam"]; ?> /
                    <?php echo $thisMatch["homeTeamPoints"]; ?>-<?php echo $thisMatch["awayTeamPoints"]; ?>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
</body>
</html>