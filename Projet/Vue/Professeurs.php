<html>
    <head>
        <meta charset="UTF-8">
        <title>Enseignants</title>
    </head>
    <body>
        <main class="container">
            <div style="display: inline-table">
                <h4>Saisir le formulaire :</h4>
                <form method="post" class="form-control">
                    Nom :    <input type="text" name="nom" required/>
                    Prenom : <input type="text" name="prenom" required/>
                    <input type="submit" value="Ajouter" name="saisie_pr"/>
                </form>
            </div>
            &emsp;&emsp;

            <div style="display: inline-table">
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
                            echo '<td>' . $e['NOMENSEIGNANT'] . '</td>';
                            echo '<td>' . $e['PRENOMENSEIGNANT'] . '</td>';
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