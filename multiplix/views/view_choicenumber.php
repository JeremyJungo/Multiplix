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
<script>
    function createchkbx() {
        for (var i=1,i>13,i++){
            var checkbox = document.createElement('input');
            checkbox.type = "checkbox";
            checkbox.name = "number" + i;
            checkbox.value = "number" + i;
            checkbox.id = "number" + i;
            var label = document.createElement('label');
            label.htmlFor="number"+ i;
            label.textContent="Livret " + i;
            var br = document.createElement('br');

            document.getElementById("numberform").appendChild(checkbox);
            document.getElementById("numberform").appendChild(label);
            document.getElementById("numberform").appendChild(br);
        }
    }
    window.onload=createchkbx();
</script>
<article>
    <div>
        <h1>Nouvelle partie en</h1>
    </div>
    <div>
        <form id="numberform" action="index.php?action=play" method="get">
            <input type="checkbox" id="number1" name="number1" value="1">
            <label for="number1">Livret 1</label><br>

            <input type="checkbox" id="number2" name="number2" value="2">
            <label for="number2">Livret 2</label><br>

            <input type="checkbox" id="number3" name="number3" value="3">
            <label for="number3">Livret 3</label><br>

            <input type="checkbox" id="number4" name="number4" value="4">
            <label for="number4">Livret 4</label><br>

            <input type="checkbox" id="number5" name="number5" value="5">
            <label for="number5">Livret 5</label><br>

            <input type="checkbox" id="number6" name="number6" value="6">
            <label for="number6">Livret 6</label><br>

            <input type="checkbox" id="number6" name="number6" value="6">
            <label for="number6">Livret 6</label><br>

            <input type="checkbox" id="number7" name="number7" value="7">
            <label for="number7">Livret 7</label><br>

            <input type="checkbox" id="number8" name="number8" value="8">
            <label for="number8">Livret 8</label><br>

            <input type="checkbox" id="number9" name="number9" value="9">
            <label for="number9">Livret 9</label><br>

            <input type="checkbox" id="number10" name="number10" value="10">
            <label for="number10">Livret 10</label><br>

            <input type="checkbox" id="number11" name="number11" value="11">
            <label for="number11">Livret 11</label><br>

            <input type="checkbox" id="number12" name="number12" value="12">
            <label for="number12">Livret 12</label><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</article>
<?php
$content = ob_get_clean(); //stocke dans la variable
require "views/layout.php";
?>
