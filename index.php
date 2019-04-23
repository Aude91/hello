<?php
require "function.php" ;

$resultat = getAllAnnonces();

?>

<ul>
 	<li><?php echo $resultat["annonce1"][0] ?></li>
</ul>
<p><?php echo $resultat["annonce1"][0] ?> vaut <?php echo $resultat["annonce1"][1] ?></p>
<hr>
<ul>
 	<li><?php echo $resultat["annonce2"][0] ?></li>
 	<li><?php echo $resultat["annonce2"][1] ?></li>
</ul>

