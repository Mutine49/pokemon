
<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <?php if (isset($error)) { ?>
        <p style="color: red";><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="connexion_logic.php">
        <label for="nom">Nom d'utilisateur:</label>
        <input type="text" name="nom" id="nom" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
