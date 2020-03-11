<?php
/**
 * User: Jeremy.JUNGO
 * Date: 27.02.2020
 * controleur.php :
 */

//Model is required to contact DB
require "model/model.php";

//The function goLogin redirects to the login page
function goHome()
{
	require "views/view_home.php";
}
//The function goLogin redirects to the login page
function goLogin()
{
    require "views/view_login.php";
}
//The function login checks the values to connect a user
function login()
{
    extract ($_POST);
    //if the login is empty
    if (empty($Fusername)) {
        //and password isn't empty
        if (!empty($Fpassword)) {
            require "views/view_login.php";//error login is empty
        }
        else {
            require "views/view_login.php";//error all is empty
        }
    }
    else {
        //if the password is empty
        if (empty ($Fpassword)) {
            require "views/view_login.php"; //error password is empty
        }
        else {
            //get data users
            $users = getLogin($_POST);

            $user = $users->fetch();

            //checks the value entered with DB values
            if($Fusername != $user['username']){
                require "views/view_login.php"; //error login is false
            }
            else {
                if ($Fpassword != $user['userpswd']) {
                    require "views/view_login.php"; //error password is false
                } else {
                    $_SESSION['login']= $Fusername;
                    require "views/view_menu.php";
                }
            }
        }
    }
}
//The function goRegister redirects to the registration page
function goRegister()
{
    require "views/view_register.php";
}
//The function register insert new user in the DB
function register()
{

}

//----------------------------------------------------------------------\\
function error($e)
{
    require "views";
}
?>
