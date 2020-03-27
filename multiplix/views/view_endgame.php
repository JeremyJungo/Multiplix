<?php
/**
 * Created by PhpStorm.
 * User: Jeremy.JUNGO
 * Date: 26.03.2020
 * view_endgame.php :
 */
ob_start(); //"open" the buffer
$titre="Multiplix";
?>
    <article>
        <h1>Mode guidé</h1>
            <br>
            <a href="index.php?action=overallStatistics"><label>Statistiques</label></a>
            <br>
            <a href="index.php?action=goHome"><input type="button" value="X"></a>
        </div>
        <div>

        </div>
    </article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require "views/layout.php";
?>