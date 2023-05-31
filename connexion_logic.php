<?php
include_once('config/mysql.php');

if (!$mysqlClient) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
    $nom = $_POST["nom"];
    $password = $_POST["password"];

    $query = "SELECT * FROM dresseur WHERE nom = '$nom' AND password = '$password'";
    $result = $mysqlClient->prepare($query);
    $result->execute();
    $resultD = $result->fetchAll();
    echo count($resultD);
    if(count($resultD) == 0)
{
    echo "No results found";
}
else
{
header("Location: index.php");
}
?>