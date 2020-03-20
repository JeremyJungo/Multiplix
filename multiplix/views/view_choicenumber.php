<?php
/**
 * Created by PhpStorm.
 * User: Jeremy.JUNGO
 * Date: 19.03.2020
 * view_choicenumber.php :
 */
ob_start(); //"open" the buffer
$titre="Multiplix";
?>
<article>
    <div>
        <h1>Nouvelle partie en</h1>
    </div>
    <div>
        <form action="index.php?action=play" method="post">
            <input type="radio" id="number1" name="number" value="1">
            <label for="number1">Livret 1</label><br>

            <input type="radio" id="number2" name="number" value="2">
            <label for="number2">Livret 2</label><br>

            <input type="radio" id="number3" name="number" value="3">
            <label for="number3">Livret 3</label><br>

            <input type="radio" id="number4" name="number" value="4">
            <label for="number4">Livret 4</label><br>

            <input type="radio" id="number5" name="number" value="5">
            <label for="number5">Livret 5</label><br>

            <input type="radio" id="number6" name="number" value="6">
            <label for="number6">Livret 6</label><br>

            <input type="radio" id="number6" name="number" value="6">
            <label for="number6">Livret 6</label><br>

            <input type="radio" id="number7" name="number" value="7">
            <label for="number7">Livret 7</label><br>

            <input type="radio" id="number8" name="number" value="8">
            <label for="number8">Livret 8</label><br>

            <input type="radio" id="number9" name="number" value="9">
            <label for="number9">Livret 9</label><br>

            <input type="radio" id="number10" name="number" value="10">
            <label for="number10">Livret 10</label><br>

            <input type="radio" id="number11" name="number" value="11">
            <label for="number11">Livret 11</label><br>

            <input type="radio" id="number12" name="number" value="12">
            <label for="number12">Livret 12</label><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require "views/layout.php";
?>
