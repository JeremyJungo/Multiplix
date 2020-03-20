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
	$connexion = new PDO('mysql:host=localhost;dbname=db_multiplix', 'root', 'Ghfew_1460T'); //mot de passe en clair
	//errors when connexion with DB
	$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connexion;
}

// Get login
function getLogin ($post)
{
    $connexion=getDB();
    //select the user
    $request="'SELECT * FROM users where username='".$post['username']."'AND userpswd='".$post['userpswd'].";'";
    return $connexion->query($request);
}

// Enter a new user
function newregister($post)
{
    $connexion=getDB();
    //Add new user
    $request = "'INSERT INTO users (id_user,firstname,lastname,username,userpswd) VALUES (NULL,'".$post['firstname']."','".$post['lastname']."','".$post['username']."','".$post['password']."');'";
    $connexion->exec($request);
}
