<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->


<?php 
    $matches = [

        [
            'squadraCasa' => 'Italia',
            'squadraOspite' => 'Svizzera',
            'puntiCasa' => 20,
            'puntiOspite' => 0
        ],

        [
            'squadraCasa' => 'Azerbaigian',
            'squadraOspite' => 'Birmania',
            'puntiCasa' => 20,
            'puntiOspite' => 40
        ],

        [
            'squadraCasa' => 'Honduras',
            'squadraOspite' => 'Montenegro',
            'puntiCasa' => 30,
            'puntiOspite' => 10
        ]
       
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php for ($i = 0; $i < count($matches); $i++) { ?>
    
    <!-- stampa: matches di [index][squadraCasa] - matches di [index][squadraOspite] -->
    <p><?php echo $matches[$i]['squadraCasa'] .' - ' .$matches[$i]['squadraOspite'] ?>

        <!-- matches di [index][puntiCasa] - matches di [index][puntiOspite] -->
        <span><?php echo ' | ' .$matches[$i]['puntiCasa'] .' - ' .$matches[$i]['puntiOspite']; ?></span>
    
    </p> 

<?php }?>


</body>
</html>