<?php
// ## Snack 5
// Utilizzare questo array: https://pastebin.com/CkX3680A.
// Stampiamo il nostro array mettendo gli insegnanti in un
// rettangolo grigio e i PM in un rettangolo verde.

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Teachers =></h2>
    <?php for($i = 0; $i < count($db["teachers"]); $i++) { ?>
        <?php $thisTeacher = $db["teachers"][$i]; ?>
        <div class="teachers">
            <span>
                <?php echo $thisTeacher['name']; ?>
                <?php echo $thisTeacher['lastname']; ?>
            </span>
        </div>
    <?php } ?>

    <h2>Pm's =></h2>
    <?php for($i = 0; $i < count($db["pm"]); $i++) { ?>
        <?php $thisPm = $db["pm"][$i]; ?>
        <div class="pms">
            <span>
                <?php echo $thisPm['name']; ?>
                <?php echo $thisPm['lastname']; ?>
            </span>
        </div>
    <?php } ?>
</body>
</html>