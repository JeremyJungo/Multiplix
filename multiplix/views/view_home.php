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
    <div>
        <a href="index.php?action=goLogin"><input type="button" value="Se connecter"></a>
        <a href="index.php?action=goRegister"><input type="button" value="S'inscrire"></a>
    </div>
    <div>
        <h3>Nouvelles parties</h3>
        <a href="index.php?action=guided-mode"><input type="button" value="Mode guidé" class="button"></a>
        <a href="index.php?action=5secondmode"><input type="button" value="Mode 5 secondes" class="button"></a>
    </div>
</article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require "views/layout.php";
session_destroy();
?>
