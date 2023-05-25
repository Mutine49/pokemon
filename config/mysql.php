<?php

const MYSQL_HOST = '10.96.16.1';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'pokemon';
const MYSQL_USER = 'admin';
const MYSQL_PASSWORD = '';

try {
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $exception) {
    die('Erreur : '.$exception->getMessage());
}

/// fonction pokemon pour index.php
$pokemonStatement = $mysqlClient->prepare('SELECT * FROM pokemon');
$pokemonStatement->execute();
$pokemon = $pokemonStatement->fetchAll();

