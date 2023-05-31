<?php
include_once('config/mysql.php');
$dresseur = $mysqlClient->prepare("
SELECT nom, nb_combats 
FROM dresseur", 

);

$dresseur->execute();
$resultD = $dresseur->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>recherche dresseur</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    table {
      border-collapse: collapse;
      width: 400px;
    }
    th, td {
      border: 1px solid black;
      padding: 10px;
      vertical-align: top;
    }
</style>
<body class="d-flex flex-column min-vh-100">
  <div class="container">
        <?php include_once('header.php') ?>   
    </div>
    <h1>Liste de dresseur Pokemon</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Rappel de vos informations</h5>
            <p class="card-text"><b>Liste de dresseurs</b>:</p>
            <table>
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Nombre de combats</th>
                  <th>pokemon</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($resultD as $rowD): ?>

                <tr>
                  <td><?php echo $rowD['nom']; ?></td>
                  <td><?php echo $rowD['nb_combats']; ?></td>
                  <td></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        </div>
    </div>
    <?php include_once('footer.php') ?>
</body>
</html>
