<?php
require "function.php" ;

$resultat = getAllAnnonces();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        li{
            list-style: none; text-decoration: underline;
        }
    </style>
</head>
<body>
<ul>
 	<li><?php echo $resultat["annonce1"][0] ?></li>
</ul>
<p><?php echo $resultat["annonce1"][0] ?> vaut <?php echo $resultat["annonce1"][1] ?></p>
<hr>
<ul>
 	<li><?php echo $resultat["annonce2"][0] ?></li>
 	<li><?php echo $resultat["annonce2"][1] ?></li>
</ul>

<?php 

$first = getFirstAnnonce();
print_r($first);

?>

</body>
</html>

