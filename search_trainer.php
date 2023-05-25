<?php include_once('config/mysql.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>recherche dresseur</title>
</head>
<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
<style type="text/css">
    table{
      border-collapse: collapse;
      width: 400px;
}
    th, td{
      border: 1px solid black;
      padding: 10px;
      vertical-align: top;
}
    </style>


<body class="d-flex flex-column min-vh-100">
	<div class="container">
        <?php include_once('header.php') ?>   
    </div>

<h1>Liste de dresseur pokemon</h1>
        
<div class="card">
    
    <div class="card-body">
        <h5 class="card-title">Rappel de vos informations</h5>
        <p class="card-text"><b>liste de dresseur</b> : </p>
        <table>
          <thead>
            <tr>
              <th>nom</th>
              <th>Nombre de combat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> <a href ='#'> dresseur 1 <?php echo $_GET['dresseur']; ?></td>
              <td>nombre de combat du dresseur 1</td>
            </tr>
          </tbody>
        </table>
        <?php echo $_GET['dresseur']; ?>
    </div>
</div>


   


<?php include_once('footer.php') ?>
</body>
</html>