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
    if(isset($users)==true){
        $_SESSION['login']=$post['username'];
        require "views/view_menu.php";
    } else {
        require "views/view_login.php"; //error login/password is false
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
    //Change the controle of the username
    if(isset($users)==$post['username']){
        require "views/view_register.php"; //the user is existing
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
    $_SESSION['Ncalculation']=0;
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
    if (isset($_SESSION['mode'])==1){
        //Aleatoire multiplicator
        $alea=rand(1,12);
        //Define the number
        $_SESSION['number']=$post['number'];
        //add in session the calculation and result
        $_SESSION['result']=$post['number'] * $alea;
        $_SESSION['calculation']=$post['number']." * ".$alea." = _____";
        require "views/view_playguidedmode.php";
    } elseif (isset($_SESSION['mode'])==2) {
        require "views/view_playfivesecondsmode.php";
    } else {
        require "views/view_home.php";
    }
}

//when the user is playing guided mode
function playingguidedmode(){
    $_SESSION['Ncalculation']+=1;
    if ($_SESSION['Ncalculation']<=2){
        $alea=rand(1,12);
        $_SESSION['result']=$_SESSION['number'] * $alea;
        $_SESSION['calculation']=$_SESSION['number']." * ".$alea." = _____";
        require "views/view_playguidedmode.php";
    } else {
        require "views/view_endgame.php";
    }

}

function checkanswer($post){
    if (isset($_SESSION['mode'])==1){
        if($_SESSION['result']==$post['answer']){
            $_SESSION['answer']=$_SESSION['result'];
            $_SESSION['message']="Bravo, tu as la bonne réponse";
        } else {
            $_SESSION['answer']=$post['answer'];
            $_SESSION['message']="Dommage tu n'as pas la bonne réponse, ".$_SESSION['result']." était la bonne réponse.";
        }
        require "views/view_answerguidedmode.php";
    } elseif (isset($_SESSION['mode'])==2) {
        require "views/view_answerfivesecondsmode.php";
    } else {
        require "views/view_home.php";
    }
}

//----------------------------------- Errors -----------------------------------\\
function error($e)
{
    //require "views";
}

