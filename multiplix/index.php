<?php
/**
 * User: Jeremy.JUNGO
 * Date: 27.02.2020
 * index.php :
 */

session_start();
require "controller/controller.php";

try{
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch($action){
            case 'goHome':
                goHome();
                break;
//-------------- Login, Register / Logout -----------------\\
            case 'goLogin':
                goLogin();
                break;
            case 'login':
                login();
                break;
            case 'logout':
                logout();
                break;
            case  'goRegister':
                goRegister();
                break;
            case 'register':
                register();
                Break;
//-------------- Statistics -----------------\\
            case 'overallStatistics':
                overallStatistics();
                break;
            case 'gameStatistics':
                gameStatistics();
                break;
//-------------- - -----------------\\
            default :
                throw new Exception("action non valide");
        }
    }else goHome();
}catch(Exception $e){
    error ($e->getMessage());
}
?>