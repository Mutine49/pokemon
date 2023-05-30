<?php 
    include_once('config/mysql.php');
    /// fonction type pour index.php
    $typeStatement = $mysqlClient->prepare('SELECT * FROM type');
    $typeStatement->execute();
    $type = $typeStatement->fetchAll(); 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recherche type</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once('header.php');
            foreach ($type as $t) :
                echo("<a href =type_perso.php?id=".$t['id'].">".$t['nom']."</a></br>");
            endforeach ?>
    </div>

    <?php include_once('footer.php') ?>
</body>