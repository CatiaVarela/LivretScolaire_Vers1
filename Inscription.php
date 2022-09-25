<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../styles/connexion_style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->

            <form action="Ajout_inscription.php" method="POST">
                <h1>Inscription</h1>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrez votre nom" name="nom" required>

                <label><b>Prénom</b></label>
                <input type="text" placeholder="Entrez votre prénom" name="prenom" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez un mot de passe" name="password" required>

                <label><b>Confirmation du mot de passe</b></label>
                <input type="password" placeholder="Confirmez votre mot de passe" name="confirm_password" required>

                <label><br/><a href='./Controller/C_accueil.php'>Accueil</a></label>

                <input type="submit" id='submit' value='LOGIN' >
            </form>

    </body>
</html>