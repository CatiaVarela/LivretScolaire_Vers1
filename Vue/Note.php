<html>
    <body>
        <main class="container">
            <form method="post">
                <table border="1">
                    <?php
                    foreach ($etud as $et) {
                        ?>
                        <tr>
                            <td><?php echo 'Classe: ' . $cla ?></td>
                            <td colspan="2"><?php echo $et['NOMETUDIANT'] . ' ' . $et['PRENOMETUDIANT'] ?></td>
                            <th colspan="3"></th>
                        </tr>
                    <?php } ?>
                    <tr>
                        <th colspan="2">Notes</th>
                        <th colspan="2">Matières</th>
                        <th> Appréciations</th>

                    </tr>
                    <tr>
                        <td>Semestre 1</td>
                        <td>Semestre 2</td>
                        <th colspan="3"></th>
                    </tr>
                    <?php
                    foreach ($matiere as $m) {
                        ?>
                        <tr>
                            <td><input type="number" step="0.001" min="0" max="20" name="S1[]" /></td>
                            <td><input type="number" step="0.001" min="0" max="20" name="S2[]"/></td>
                            <td><?php echo $m['LibMatiere'] ?></td>
                            <td><input type="checkbox" name="matiere[]" value="<?php echo $m['CodeMatiere'] ?>"/></td>
                            <td><textarea rows="2" cols="40" name="appreciations[]" maxlength="1000"></textarea></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <input type="submit" value="Valider" name="saisie_n" id="submit"/>
            </form>

        </main>
    </body>
</html>
