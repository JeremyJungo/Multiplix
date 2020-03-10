<?php
/**
 * Created by PhpStorm.
 * User: Jeremy.JUNGO
 * Date: 10.03.2020
 * view_register.php :
 */
ob_start(); //"open" the buffer
$titre="Multiplix";
?>
<article>
    <form method="post" action="index.php?action=#">
        <table class="table">
            <tr>
                <td>
                    <input type="text" placeholder="prénom">
                </td>
                <td>
                    <input type="text" placeholder="nom">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" placeholder="pseudonyme">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" placeholder="mot de passe">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" placeholder="confirmer le mot de passe">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="S'inscrire"></td>
            </tr>
        </table>
    </form>
</article>
<?php
$contenu = ob_get_clean(); //stocke dans la variable
require  "views/layout.php";
?>
