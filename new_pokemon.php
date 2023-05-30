<?php 
    include_once('config/mysql.php');
    $pokeStatement = $mysqlClient->prepare("
        SELECT dresseur.nom as dr_nom FROM dresseur
    ");
    $pokeStatement->execute();
    $poke_dr = $pokeStatement;
    $pokeStatement = $mysqlClient->prepare("
        SELECT pokemon.nom as poke_nom FROM pokemon
    ");
    $pokeStatement->execute();
    $poke_poke= $pokeStatement;
    $pokeStatement = $mysqlClient->prepare("
        SELECT sexe.sexe as sexe_nom FROM sexe
    ");
    $pokeStatement->execute();
    $poke_sexe = $pokeStatement;

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
        <form action="submit_contact.php" method="POST">
            <div class="mb-3">
                <label>Pokemons :</label>
                <select>
                     <?php foreach ($poke_poke as $p) :
                        echo ("<option value=".$p['poke_nom'].">".$p['poke_nom']."</option>");
                     endforeach ?>
                </select>
                </br>
                </br>
                <label>Sexes :</label>
                <select>
                    <?php foreach ($poke_sexe as $s) :
                        echo ("<option value=".$s['sexe_nom'].">".$s['sexe_nom']."</option>");
                     endforeach ?>
                </select>
                </br>
                </br>
                <label>Dresseurs :</label>
                <select>
                    <?php foreach ($poke_dr as $dr) :
                        echo ("<option value=".$dr['dr_nom'].">".$dr['dr_nom']."</option>");
                     endforeach ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>
    <?php include_once('footer.php')?>
</body>