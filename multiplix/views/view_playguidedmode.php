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

</article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require "views/layout.php";
?>