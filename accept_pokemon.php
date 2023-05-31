<?php
include_once('config/mysql.php');
$getData = $_POST;

$poke = $_POST['poke'];
$sexe = $_POST['sexe'];
$dr = $_POST['dr'];

$sql = ("INSERT INTO pokemons_existants (id_dresseur, id_Pokemon, id_sexe) VALUES ($dr, $poke, $sexe)");
$sqlstatement = $mysqlClient->prepare($sql);
$sqlstatement->execute();

$pokeStatement = $mysqlClient->prepare("
        SELECT nom as dr_nom FROM dresseur WHERE dresseur.id = $dr
    ");
    $poke_dr = $pokeStatement;
    $poke_dr->execute();
    $pdr = $poke_dr->fetch();
    $pokeStatement = $mysqlClient->prepare("
        SELECT nom as poke_nom FROM pokemon WHERE pokemon.id = $poke
    ");
    $poke_poke= $pokeStatement;
    $poke_poke->execute();
    $pp = $poke_poke->fetch();
    $pokeStatement = $mysqlClient->prepare("
        SELECT sexe as sexe_nom FROM sexe WHERE sexe.id = $sexe
    ");
    $poke_sexe = $pokeStatement;
    $poke_sexe->execute();
    $ps = $poke_sexe->fetch();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once('header.php');
        echo ('<p>'.$pdr['dr_nom']. ' à maintenant un ' .$pp['poke_nom']. ' de sexe ' .$ps['sexe_nom'].'</p>');
        ?>
    </div>
    <?php include_once('footer.php')?>
</body>