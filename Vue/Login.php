<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="../styles/login.css" type="text/css">
</head>
<body>
    <div id="login-form-wrap">
        <h2>Connexion</h2>
        <form id="login-form" method="post" action="../Controller/C_login.php">
            <p>
                <input type="text" id="username" name="username" placeholder="Nom" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="submit" id="login" value="Se Connecter">
            </p>
            <div id="create-account-wrap">
                <label for="admin">Se connecter en tant qu'Administrateur</label>
                <input type="checkbox" id="admin" name="admin">
            </div>
            <br/>
        </form>
    </div>
</body>
</html>