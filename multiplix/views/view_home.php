<?php
/**
 * Created by PhpStorm.
 * User: Jeremy.JUNGO
 * Date: 05.03.2020
 * view_home.php :
 */
ob_start(); //"open" the buffer
$titre="Multiplix";
?>


<?php
$contenu = ob_get_clean(); //stocke dans la variable
require  "gabarit.php";
?>
