<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->


<?php 
    $partite = [

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

<?php for ($i = 0; $i < count($partite); $i++) { ?>
    <p><?php echo $partite[$i]['squadraCasa'] .' - ' .$partite[$i]['squadraOspite'] .' | ' .$partite[$i]['puntiCasa'] .' - ' .$partite[$i]['puntiOspite']; ?></p>
<?php }?>


</body>
</html>