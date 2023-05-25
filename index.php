<?php include_once('config/mysql.php') ?>

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
        <?php foreach ($pokemon as $p) :?>
            <p><?php echo $p['nom']; ?></p>
        <?php endforeach ?>
    </div>
    
    <?php include_once('footer.php')?>
</body>