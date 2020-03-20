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
function login($post){
    $users=getLogin($post);
    if($post['username']!=$users['username']){
        require "views/view_login.php"; //error login is false
    } else {
        if ($post['userpswd']!=$users['userpswd']) {
            require "views/view_login.php"; //error password is false
        } else {
            $_SESSION['login']=$post['username'];
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
function register($post)
{
    $users=getLogin($post);
    if(isset($users)){
        require "views/view_register.php";
    } else {
        newregister($post);
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
    //Sets the game mode
    $_SESSION['mode']=1;
    require "views/view_choicenumber.php";
}

//The function allows you to start a five seconds game and choose the numbers
function fivesecondmode(){
    //Sets the game mode
    $_SESSION['mode']=2;
    require "views/view_choicenumber.php";
}

//The function checks the game mode to redirect to the correct part
//Get the number to go start the game
function play($post){
    if (isset($_SESSION['mode'])== 1){
        $alea = rand(1,12);
        $_SESSION['result']=$post['number'] * $alea;
        $_SESSION['calculation'] = $post['number']." * ".$alea." = _____";
        require "views/view_playguidedmode.php";
    } elseif (isset($_SESSION['mode'])== 2) {
            require "views/view_playfivesecondsmode.php";
    } else {
        echo isset($_SESSION['mode']);
    }
}

//----------------------------------- Errors -----------------------------------\\
function error($e)
{
    //require "views";
}

