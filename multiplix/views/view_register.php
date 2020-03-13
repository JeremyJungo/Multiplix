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
    <form method="post" action="index.php?action=register">
        <table class="table">
            <tr>
                <td>
                    <input type="text" name="firstname" placeholder="prénom" required>
                </td>
                <td>
                    <input type="text" name="lastname" placeholder="nom" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="username" placeholder="pseudonyme" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="password" id="pass1" placeholder="mot de passe" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="password2" id="pass2" placeholder="confirme le mot de passe" required>
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
        if(document.getElementById('pass1') !== document.getElementById('pass2')){
            //document.write(document.getElementsByName('Rpassword'));
            //document.write(document.getElementsByName('Rpassword2'));
            document.write(document.getElementById('pass1'));
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
