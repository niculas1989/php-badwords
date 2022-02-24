<?php
$first_try = 'Pippo';

$len_string = strlen($first_try);

$censured_string = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.';

/* $word = $_GET('word'); */

$new_string = str_replace('Lorem', '****', $censured_string);
/*

Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

 */
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <p>Il nome che utilizzato per questo esercizio è: <?php echo $first_try ?></p>
    <p>La sua lunghezza è: <?php echo $len_string ?></p>

    <div>
        <p>La frase originale è questa: <?php echo $censured_string ?></p>
        <p>La frase con la parola censurata scelta dall'utente è: <?php echo $new_string ?></p>
    </div>
</body>

</html>