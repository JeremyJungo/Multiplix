<?php
/**
 * User: Jeremy.JUNGO
 * Date: 27.02.2020
 * controleur.php :
 */

require "model/model.php";

function home()
{
	require "views/view_home.php";
}
function login()
{
    require "views/view_login.php";
}
function register()
{
    require "views/view_register.php";
}

//----------------------------------------------------------------------\\
function error($e){
    require "views";
}
?>
