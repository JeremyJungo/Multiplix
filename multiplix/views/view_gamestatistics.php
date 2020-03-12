<?php
/**
 * Created by PhpStorm.
 * User: Jeremy.JUNGO
 * Date: 12.03.2020
 * view_gamestatistics.php :
 */
ob_start(); //"open" the buffer
$titre="Multiplix";
?>
    <article>
        <div class="navbar">
            <h1>Statistiques de parties</h1>
            <a href="index.php?action=overallStatistics"><label>Statistiques globales</label></a>
        </div>
        <div>


        </div>
    </article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require  "views/layout.php";
?>