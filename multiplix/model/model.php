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
function getLogin ()
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

// Get login
function newgetLogin ($post)
{
    //connecte to BD
    $connexion = getDB();
    //request
    $request="SELECT * FROM users where username ='".$_POST['username']."';";
    //run the request
    $users = $connexion->query($request);
    echo $request;
    var_dump($users);
    //return results
    return $users;
}

function newregister()
{
    //connecte to BD
    $connexion = getDB();
    //Add new user
    $request = "INSERT INTO `users` (id_user,firstname,lastname,username,userpswd) VALUES ('','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['username']."','".$_POST['password']."');";
    $connexion->exec($request);
}
?>