<?php
/**
 * User: Jeremy.JUNGO
 * Date: 27.02.2020
 * modele.php :
 */
// getBD : connexion with the serveur DB
/*
 * Inspired by Pascal Benzonana
*/
function getDB()
{
    $tempDbConnexion = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'db_multiplix';
    $userName = 'root';
    $userPwd = 'Ghfew_1460T';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try{
        $tempDbConnexion = new PDO($dsn, $userName, $userPwd);
    }
    catch (PDOException $exception) {
        echo 'Connection failed: ' . $exception->getMessage();
    }
    return $tempDbConnexion;
}

// Get login
/*
 * Inspired by Pascal Benzonana and the source http://php.net/manual/en/pdo.prepare.php
 * @param : $post
 * @return the username
*/
function getLogin ($post){
    $queryResult = null;

    $request=("SELECT username FROM users WHERE username='".$post['username']."' AND (userpswd='".$post['userpswd']."')");

    $dbConnexion = getDB();//open database connexion
    if ($dbConnexion != null)
    {
        $statement = $dbConnexion->prepare($request);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
    }
    $dbConnexion = null;//close database connexion
    return $queryResult;
}

// Enter a new user
/*
 * Inspired by Pascal Benzonana
* This function is designed to insert value in database
* @param $post
* @return bool|null : $statement->execute() returne true is the insert was successful
*/
function newregister($post){
    $queryResult = null;

    $request=("INSERT INTO users (firstname,lastname,username,userpswd) VALUES ('".$post['firstname']."','".$post['lastname']."','".$post['username']."','".$post['password']."')");

    $dbConnexion = getDB();//open database connexion
    if ($dbConnexion != null)
    {
        $statement = $dbConnexion->prepare($request);//prepare query
        $queryResult = $statement->execute();//execute query
    }
    $dbConnexion = null;//close database connexion
    return $queryResult;
}