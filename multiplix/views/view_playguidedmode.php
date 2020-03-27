<?php
/**
 * Created by PhpStorm.
 * User: Jeremy.JUNGO
 * Date: 19.03.2020
 * view_playguidedmode.php :
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
        <input type="text" value="<?=$_SESSION['calculation']; ?>">
    </div>
    <div>
        <form action="index.php?action=checkanswer" method="post">
            <input type="submit" name="answer" value="<?=$_SESSION['result']; ?>"><input type="submit" name="answer" value="5">
            <br>
            <input type="submit" name="answer" value="5"><input type="submit" name="answer" value="5">
        </form>
    </div>
</article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require "views/layout.php";
?>