<?php
// ## Snack 3
// Creare un array con 15 numeri casuali, tenendo conto che l’array
// non dovrà contenere lo stesso numero più di una volta

    $counter = 0;
    $randomNumbersArray = [];
    $thisRandomNumber = null;

    while(count($randomNumbersArray) < 15) {
        $thisRandomNumber = rand(1, 100);

        if(!in_array($thisRandomNumber, $randomNumbersArray)) {
            $randomNumbersArray[] = $thisRandomNumber;
        }

        $counter++;
    }

    var_dump($randomNumbersArray);
?>