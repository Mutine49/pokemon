<?php 
    include_once('config/mysql.php');
    $type_page = $_GET["id"];
    $typeStatement = $mysqlClient->prepare("
        SELECT pokemon.nom as nom FROM pokemon JOIN est_de_type ON pokemon.id = est_de_type.id_pkmn JOIN type ON type.id = est_de_type.id_type WHERE type.id = :type
    ");
    $typeStatement->execute([
        'type' => $type_page,
    ]);
    $type = $typeStatement;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon - Type perso</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once('header.php') ;
            foreach ($type as $t) :
                echo '<p>'.$t['nom'].'</p>';
            endforeach ?>
    </div>
    <?php include_once('footer.php')?>
</body>