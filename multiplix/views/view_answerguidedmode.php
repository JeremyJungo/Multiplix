<?php
/**
 * Created by PhpStorm.
 * User: Jeremy.JUNGO
 * Date: 24.03.2020
 * view_answerguidedmode.php :
 */
ob_start(); //"open" the buffer
$titre="Multiplix";
?>
    <article>
        <div>
            <h1>Mode guidé</h1>
            <br>
            <a href="index.php?action=overallStatistics"><label>Statistiques</label></a>
            <br>
            <a href="index.php?action=goHome"><input type="button" value="X"></a>
        </div>
        <div>
            <input type="text" value="<?=$_SESSION['answer'];?>">
        </div>
        <div>
            <label><?=$_SESSION['message']?></label>
            <span><a href="index.php?action=playingguidedmode"><input type="button" value=">"></a></span>
        </div>
    </article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require "views/layout.php";
?>