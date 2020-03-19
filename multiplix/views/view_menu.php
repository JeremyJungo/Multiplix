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
    <div>
        <a href="index.php?action=overallStatistics"><input type="button" value="Statistiques" class="button"></a>
        <a href="index.php?action=logout"><input type="button" value="Se déconnecter" class="button"></a>
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
?>
