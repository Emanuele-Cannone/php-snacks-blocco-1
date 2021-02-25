<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->


<?php 
    $messaggio = 'Accesso riuscito'; #dichiaro la variabile messaggio
    $nome = $_GET["name"]; #dichiaro i vari get
    $mail = $_GET["mail"];
    $eta = $_GET["age"];
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

    <!-- se la lunghezza di nome è maggiore di 3 && la variabile mail include sia il '.' che la '@' && la variabile eta è un numero -->
    <?php if (strlen($nome) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($eta)) { ?>

        <!-- stampa la variabile messaggio -->
        <p> <?php echo $messaggio ?></p>

        <!-- altrimenti -->
    <?php } else {?>

        <!-- altrimenti la variabile messaggio cambia -->
        <?php $messaggio = 'Accesso negato' ?>
        <!-- stampa la variabile messaggio cambiata -->
        <p> <?php echo $messaggio ?></p>

    <?php }?>

</body>
</html>