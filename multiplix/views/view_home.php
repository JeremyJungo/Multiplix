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
        <p>Bonjour bienvenue sur notre site pour reviser les livrets de 1 à 12</p>
    </div>
        <a href="index.php?action=login"><button type="button">Se connecter</button></a>
        <a href="index.php?action=register"><button type="button">S'inscrire</button></a>
</article>
<?php
$contenu = ob_get_clean(); //stocke dans la variable
require  "views/gabarit.php";
?>
