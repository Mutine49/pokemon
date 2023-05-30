<?php 
    include_once('config/mysql.php');
    $poke_page = $_GET["id"];
    $pokeStatement = $mysqlClient->prepare("
        SELECT pokemons_existants.id as nom FROM pokemons_existants WHERE id_Pokemon = :poke
    ");
    $pokeStatement->execute([
        'poke' => $poke_page,
    ]);
    $poke = $pokeStatement;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon - Recherche Pokémon</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once('header.php'); 
            foreach ($poke as $p) :
                    echo ("<a>".$p['nom']."</a></br>");
            endforeach ?>
    </div>
    <?php include_once('footer.php')?>
</body>