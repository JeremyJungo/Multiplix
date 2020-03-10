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
            case 'view_home':
                home();
                break;
            case 'login':
                login();
                break;
            case  'register' :
                register();
                break;
//-------------- - -----------------\\
            default :
                throw new Exception("action non valide");
        }
    }else home();
}catch(Exception $e){
    error ($e->getMessage());
}
