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
	$connexion = new PDO('mysql:host=localhost;dbname=multilix','root', '');
	//errors when connexion with DB
	$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connexion;
	
}
?>