<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->


<?php 
    $messaggio = 'Accesso riuscito';
    $nome = $_GET["name"];
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

    <!-- <p><?php var_dump($nome)?></p> -->
    
    <?php if (strlen($nome) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($eta)) { ?>

        <p> <?php echo $messaggio ?></p>

    <?php } else {?>

        <p> <?php echo 'Accesso negato' ?></p>

    <?php }?>

</body>
</html>