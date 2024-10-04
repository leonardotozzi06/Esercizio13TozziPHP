<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function generaUrlImmagine($altezza, $larghezza){

        $immagine = "https://picsum.photos/" . "$larghezza" . "/" . "$altezza";

        return $immagine;

    }

    $altezza = rand(100,200);
    $larghezza = rand(100,200);

    generaUrlImmagine($altezza, $larghezza);

    echo "<img src='". generaUrlImmagine($altezza, $larghezza) ."'></img>"


    ?>
</body>
</html>