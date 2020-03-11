<?php
/**
 * Created by PhpStorm.
 * User: Jeremy.JUNGO
 * Date: 11.03.2020
 * view_menu.php :
 */
ob_start(); //"open" the buffer
$titre="Multiplix";
?>
<article>
    <h1>Connecté <?php echo $_SESSION['login'] ?></h1>
</article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require  "views/layout.php";
?>
