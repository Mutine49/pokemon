<?php 
include_once('config/Mysql.php');
?>
<?php
$id=$_GET['id'];

$reponse = $mysqlClient->prepare('SELECT nom, id FROM pokemon WHERE id = :id_cherche');
$reponse->execute([
        'id_cherche' => $id,
    ]);
    $id = $reponse;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="pok_perso.css" rel="stylesheet">
    <title>Fiche technique : </title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <?php include_once('header.php') ;
            foreach ($id as $t)
            {
                echo ('<p>Nom du Pokemon : ' .$t['nom']. '</p>');
            }
        ?>

        <?php echo "ID du Pokemon : "; ?>
        <?php echo $_GET['id']; ?>

    </div>
</div> 
<?php include_once('footer.php')?>
</body>