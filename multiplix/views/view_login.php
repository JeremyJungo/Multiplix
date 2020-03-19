<?php
/**
 * Created by PhpStorm.
 * User: Jeremy.JUNGO
 * Date: 10.03.2020
 * view_login.php :
 */
ob_start(); //"open" the buffer
$titre="Multiplix";
?>
<article>
    <form method="post" action="index.php?action=login">
        <table class="table">
            <tr>
                <td>
                    <?php
                    if (isset($_GET['error']) && $_GET['error'] == 'user'){
                        echo '<input type="text" name="username" placeholder="pseudonyme" required>';
                    }else{
                        echo '<input type="text" name="username" placeholder="pseudonyme" required>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    if (isset($_GET['error']) && $_GET['error'] == 'password'){
                        echo '<input type="password" name="userpswd" placeholder="mot de passe" required>';
                    }else{
                        echo '<input type="password" name="userpswd" placeholder="mot de passe" required>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Se connecter" class="button"></td>
            </tr>
        </table>
    </form>
</article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require  "views/layout.php";
?>