<?php
/**
 * User: Jeremy.JUNGO
 * Date: 27.02.2020
 * controleur.php :
 */

//Model is required to contact DB
require "model/model.php";

//The function goHome redirects to the home page or menu of the game
function goHome()
{
    if(empty($_SESSION['login'])){
        require "views/view_home.php";
    } else {
        require "views/view_menu.php";
    }
}
//----------------------------------- Login / Logout -----------------------------------\\
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
    if (empty($Lusername)) {
        //and password isn't empty
        if (!empty($Lpassword)) {
            require "views/view_login.php"; //error login is empty
        }
        else {
            require "views/view_login.php"; //error all is empty
        }
    }
    else {
        //if the password is empty
        if (empty ($Lpassword)) {
            require "views/view_login.php"; //error password is empty
        }
        else {
            //get data users
            $users=getLogin($_POST);
            $user=$users->fetch();

            //checks the value entered with DB values
            if($Lusername != $user['username']){
                require "views/view_login.php"; //error login is false
            }
            else {
                if ($Lpassword != $user['userpswd']) {
                    require "views/view_login.php"; //error password is false
                } else {
                    $_SESSION['login']= $Lusername;
                    require "views/view_menu.php";
                }
            }
        }
    }
}
//The function logout disconnect te user and go back to home
function logout()
{
    require "views/view_home.php";
}

//----------------------------------- Register -----------------------------------\\
//The function goRegister redirects to the registration page
function goRegister()
{
    require "views/view_register.php";
}

//The function register insert new user in the DB
function register()
{
    //extract to compare value with the DB
    extract ($_POST);
    $username=$Rusername;

    $users=getLogin($_POST);
    $user=$users->fetch();

    if ($Rusername == $user) {
        newregister();
    }
}

//----------------------------------- Statistics -----------------------------------\\
//The function overallStatistics redirects to the overall statistics page for the user
function overallStatistics()
{
    require "views/view_overallstatistics.php";
}
//The function overallStatistics redirects to the game statistics page for the user
function gameStatistics()
{
    require  "views/view_gamestatistics.php";
}

//----------------------------------- Errors -----------------------------------\\
function error($e)
{
    //require "views";
}
?>
