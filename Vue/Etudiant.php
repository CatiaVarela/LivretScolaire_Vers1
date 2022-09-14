<html>
    <body>
        <title>Etudiants</title>
        <main class="container">
            <h2> Liste des étudiants </h2>
            <table border="1">
                <tr>
                    <th colspan="6">Etudiants</th>
                </tr>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Classe</th>
                    <th colspan="2"></th>
                </tr>
                <?php
                foreach ($etudiant as $et) {
                    ?>
                    <tr>
                        <td><?php echo $et['NOMETUDIANT']; ?></td> 
                        <td><?php echo $et['PRENOMETUDIANT']; ?></td> 
                        <td><?php echo $et['datedenaissance']; ?></td> 
                        <td><?php echo $et['Classe']; ?></td> 
                        <td><?php echo"<a href=../Controller/C_modif.php?codeetud=" . $et['codeetudiant'] . ">" ?>Modifier <img src="../bootstrap-icons-1.8.3/pencil.svg" height="14" width="25"/></a> </td>
                        <td><?php echo"<a href=../Controller/Supprime.php?codeetud=" . $et['codeetudiant'] . " " . "onclick='return confirmation();'" . ">" ?> Supprimer <img src="../bootstrap-icons-1.8.3/trash.svg" height="14" width="25"/></a> </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </main>
    </body>
</html>