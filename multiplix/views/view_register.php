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
    <form onsubmit="return password()" method="post" action="index.php?action=register">
        <table class="table">
            <tr>
                <td>
                    <input type="text" name="Rfirstname" placeholder="prénom" required>
                </td>
                <td>
                    <input type="text" name="Rlastname" placeholder="nom" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Rusername" placeholder="pseudonyme" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="Rpassword" placeholder="mot de passe" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="Rpassword2" placeholder="confirme le mot de passe" required>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="S'inscrire"></td>
            </tr>
        </table>
    </form>
</article>
<script type="text/javascript">
    function password() {
        if(document.getElementsByName('Rpassword') !== document.getElementsByName('Rpassword2')){
            document.write(document.getElementsByName('Rpassword'));
            document.write(document.getElementsByName('Rpassword2'));
            //alert('Les mots de passe ne se correspondent pas'); return false;
        } else {
            return true;
        }
    }
</script>
<?php
$content = ob_get_clean(); //stocke dans la variable
require  "views/layout.php";
?>
