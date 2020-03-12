<?php
/**
 * User: Jeremy.JUNGO
 * Date: 27.02.2020
 * modele.php :
 */


// getBD : connexion with the serveur DB
function getDB()
{
	//connexion with DB
	$connexion = new PDO('mysql:host=localhost;dbname=db_multiplix', 'root', '');
	//errors when connexion with DB
	$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connexion;
}

// Get login
function getLogin ($post)
{
    //connecte to BD
    $connexion = getDB();
    //request
    $request = "SELECT username, userpswd FROM users;";
    //run the request
    $users = $connexion->query($request);

    //return results
    return $users;
}

function newregister($post)
{
    //connecte to BD
    $connexion = getDB();

    //Add new user
    $request = "INSERT INTO `user`(id_user,firstname,lastname,username,userpswd);";
    $connexion->exec($request);
}
?>