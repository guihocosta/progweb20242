<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $texto = "";
        $datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
        $hora = $datetime->format( 'H' );

        if($hora >= 0 && $hora <= 12){
            $print = "<img src='img-bomdia.png'> <h1> Bom dia </h1>";
        } elseif ($hora > 12 && $hora < 18){
            $print = "<img src='img-boatarde.jpg'> <h1> Boa Tarde </h1>";
        } elseif($hora >= 18 && $hora <= 24){
            $print = "<img src='img-boanoite.jpg'> <h1> Boa Noite </h1>";
        }
        echo $print;

    ?>
</body>
</html>