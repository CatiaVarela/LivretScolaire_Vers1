<html>
    <head>
        <meta charset="UTF-8">
        <title>Matières</title>
    </head>
    <body>
        <main class="container">
            <div style="display: inline-table">
                <h4>Ajout de nouvelles matières</h4><br>
                <form action="" method="post" class="form-control">
                    Matière : <input type="text" name="matieres" required/>
                    <input type="submit" value="Ajouter" name="saisie_mat"/>
                </form>
            </div>
            &emsp;&emsp;

            <div style="display: inline-table">
                <table>
                    <tr>
                        <th colspan="10">Matières</th>
                    </tr>
                    <?php
                    foreach ($matiere as $m) {
                        echo '<tr>';
                        echo '<td>' . $m['LibMatiere'] . '</td>';
                        echo '<td><a href=../Controller/C_modif.php?codemat=' . $m['CodeMatiere'] . '>Modifier <img src="../bootstrap-icons-1.8.3/pencil.svg" height="14" width="15"/></a></td>';
                        echo '<td><a href=../Controller/Supprime.php?codemat=' . $m['CodeMatiere'] . ' ' . 'onclick="return confirmation();"' . '>Supprimer <img src="../bootstrap-icons-1.8.3/trash.svg" height="14" width="25"/></a></td>';
                    }
                    ?>
                    </tr>
                </table>
            </div>
        </main>       
    </body>
</html>      