<?php
/**
 * Created by PhpStorm.
 * User: Jeremy.JUNGO
 * Date: 12.03.2020
 * view_overallstatistics.php :
 */
ob_start(); //"open" the buffer
$titre="Multiplix";
?>
<article>
    <div class="navbar">
        <h1>Statistiques globales</h1>
        <a href="index.php?action=gameStatistics"><label>+ Autres statistiques</label></a>
    </div>
    <div>

    </div>
</article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require  "views/layout.php";
?>
