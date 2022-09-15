
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
        <style>
            body{
                background-image: url('images.jpg');
                background-size: 100%;
                background-repeat:  no-repeat;
                padding-left: 30%;
            }
            label{
                display: inline-block;
                width: 150px;
                padding-left: 20px;
            }
            legend{
                background-color: gray;
                color: white;
                padding: 5px 10px;
                width:50%;
            }
            fieldset{
                width:50%;
            }
        </style>
    </head>
    <body>
        <h1>Inscription</h1><input type="submit" value="Déja inscrit"/>
        <?php
        session_start();
        ?>
        Compléter votre inscription : <br/>
        
        <form name="frm_ajoutInscription" method="post" action="ajoutInscription.php">
            <fieldset>
                <legend>Vos informations</legend>
                 <label for nom> Nom : </label><input type="text" name=""/> <br/><br/>
                  <label for penom> Prénom : </label><input type="text" name=""/> <br/><br/>
                <label for txt_login> Login : </label><input type="text" name="txt_login"/> <br/><br/>
                <label for txt_mdp> Mot de passe : </label><input type="text" name="txt_mdp" /> <br/><br/>
                 <label for confirm_mdp> Confirmation du mot de passe : </label><input type="text" name=""/> <br/><br/>
                <input type="submit" value="Envoyer"/>
            </fieldset>
        </form>

    </body>
</html>