<?php
/**
 * User: Jeremy.JUNGO
 * Date: 27.02.2020
 * modele.php :
 */

// Get the database
function getDB()
{
	//connexion with DB
	$connexion = new PDO('mysql:host=localhost;dbname=db_multiplix','root', '');
	//errors when connexion with DB
	$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connexion;
	
}

// Get login
function getLogin($post)
{
    //connecte to BD
    $connexion = getBD();
    //request
    $request = "SELECT `username`, `userpswd` FROM `users`";
    //run the request
    $results = $connexion->query($request);

    //return results
    return $results;
}
?>