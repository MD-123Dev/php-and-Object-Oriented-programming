
<?php

require 'Client.php';
$Cl = new Client();
$Cl1 ='Ali';
$Cl ->set__prenom($Cl1);


echo $Cl->get__prenom();
echo $Cl->getClient(); ///**methode from interface */

?>