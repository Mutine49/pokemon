<?php 
    include_once('config/mysql.php');
    $pokeStatement = $mysqlClient->prepare("
        SELECT nom as dr_nom, id as dr_id FROM dresseur
    ");
    $poke_dr = $pokeStatement;
    $poke_dr->execute();
    $pokeStatement = $mysqlClient->prepare("
        SELECT nom as poke_nom, id as poke_id FROM pokemon
    ");
    $poke_poke= $pokeStatement;
    $poke_poke->execute();
    $pokeStatement = $mysqlClient->prepare("
        SELECT sexe as sexe_nom, id as sexe_id FROM sexe
    ");
    $poke_sexe = $pokeStatement;
    $poke_sexe->execute();
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
        <?php include_once('header.php') ?>
        <h1>Rajouter un Pokémon</h1>
        <form action="accept_pokemon.php" method="POST">
            <div class="mb-3">
                <label>Pokemons :</label>
                <select id="poke" name="poke">
                     <?php foreach ($poke_poke as $p) :
                        echo ('<option value="'.$p['poke_id'].'">'.$p['poke_nom'].'</option>');
                     endforeach ?>
                </select>
                </br>
                </br>
                <label>Sexes :</label>
                <select id="sexe" name="sexe">
                    <?php foreach ($poke_sexe as $s) :
                        echo ('<option value="'.$s['sexe_id'].'">'.$s['sexe_nom'].'</option>');
                     endforeach ?>
                </select>
                </br>
                </br>
                <label>Dresseurs :</label>
                <select id="dr" name="dr">
                    <?php foreach ($poke_dr as $dr) :
                        echo ('<option value="'.$dr['dr_id'].'">'.$dr['dr_nom'].'</option>');
                     endforeach ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>
    <?php include_once('footer.php')?>
</body>