<html>
    <head>
        <meta charset="UTF-8">
        <title>Enseignants</title>
    </head>
    <body margin="0"; padding="0"; height="100%">
        <main class="container">
            <div style="display: inline-table">
                <h4>Saisir le formulaire :</h4>
                <form method="post" class="form-control">
                    <label>Nom :</label> <input type="text" name="nom" text-transform="uppercase"; minlength="3" maxlength="20" required/><!--ajout de la longueur maximale et minimale lors de la saisie-->              
                    <label>Prenom :</label> <input type="text" name="prenom" text-transform="lowercase" minlength="3" maxlength="20" required/><!--ajout de la longueur maximale et minimale lors de la saisie-->
                    <input type="submit" value="Ajouter" name="saisie_pr"/>
                </form>
            </div>
            &emsp;&emsp;

            <div style="display: inline-table; overflow:scroll; border:#000000; padding: 5px; height: 100%;"><!--ajout de srollbar-->
                <table>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th colspan="2"></th>
                    <?php
                    echo 'Liste des enseignants : ' . '<br><br>';
                    foreach ($enseignant as $e) {
                        ?>
                        <tr>
                            <?php
                            echo '<td>' . strtoupper($e['NOMENSEIGNANT']) . '</td>';// mettre en majuscule les noms des ensaignants lors de la saisie
                            echo '<td>' . ucwords($e['PRENOMENSEIGNANT']) . '</td>';// mettre la premiere lettre en majuscule les prénoms des ensaignants lors de la saisie
                            echo '<td><a href=../Controller/C_modif.php?codeens=' . $e['CodeEnseignant'] . '>Modifier <img src="../bootstrap-icons-1.8.3/pencil.svg" height="14" width="25"/></a></td>';
                            echo '<td><a href=../Controller/Supprime.php?codeens=' . $e['CodeEnseignant'] . ' ' . 'onclick="return confirmation();"' . '>Supprimer <img src="../bootstrap-icons-1.8.3/trash.svg" height="14" width="25"/></a></td>';
                        }
                        ?>
                    </tr>
                </table>  
            </div>      
        </main> 
    </body>
</html>