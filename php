<?php


echo "<html>";
echo "<body  style='background-color:"; 
echo $_POST ['login'];
echo  "'>";

?>





<?php
$valeur_recup=$_POST ['nombredefraise'];
for ($fraise = 1; $fraise <= $valeur_recup; $fraise++) { 
echo "<img src='fraise.jpg' />";
}


?>











<?php
echo "</body>";
echo "</html>";
 ?>
