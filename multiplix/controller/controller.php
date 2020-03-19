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
    $users=getLogin($_POST);
    if($_POST['username'] != $users['username']){
        require "views/view_login.php"; //error login is false
    } else {
        if ($_POST['userpswd']  != $users['userpswd']) {
            require "views/view_login.php"; //error password is false
        } else {
            $_SESSION['login']= $_POST['username'];
            require "views/view_menu.php";
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
    $users=getLogin($_POST);
    if(isset($users)){
        require "views/view_register.php";
    } else {
        newregister($_POST);
        require "views/view_login.php";
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

//----------------------------------- Games -----------------------------------\\
//The function allows you to start a guided game and choose the numbers
function guidedmode(){
    $GLOBALS['mode']=1;
    require "views/view_choicenumber.php";
}

//The function allows you to start a five seconds game and choose the numbers
function fivesecondmode(){
    $GLOBALS['mode']=2;
    require "views/view_choicenumber.php";
}

//The function checks the game mode to redirect to the correct part
//Get the number to go start the game
function play(){
    if ($GLOBALS['mode']=1){
        require "views/view_playguidedmode.php";
    } elseif ($GLOBALS['mode']=2){
        require "views/view_playfivesecondsmode.php";
    } else {
        require "views/view_home.php";
    }
}
//----------------------------------- Errors -----------------------------------\\
function error($e)
{
    //require "views";
}
?>
