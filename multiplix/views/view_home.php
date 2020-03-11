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
<article>
    <div>
        <p>reviser les livrets de 1 à 12</p>
    </div>
        <a href="index.php?action=goLogin"><input type="button" value="Se connecter"></a>
        <a href="index.php?action=goRegister"><input type="button" value="S'inscrire"></a>
</article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require  "views/layout.php";
?>
