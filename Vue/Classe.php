<html>
    <body>        
        <title>Classes</title>
        <main class="container">

            Liste classes : <br><br>
            <form name="classe" action="" method="post" >
                <select name="clas[]" onChange="this.form.submit()" required>
                    <option value ="">Classe :</option>
                    <?php
                    foreach ($classe as $c) {
                        echo "\t" . '<option value=' . $c['classecode'] . '>' . $c['Libellecourt'] . '</option>' . "\n";
                    }
                    ?>
                    <?php
                    $valeur = verif_saisi('clas');
                    $etud = asso_cl_et($valeur);
                    ?>
                </select>     
            </form>

<?php if ($valeur) { ?>
                Liste étudiants : <br><br>
                <table>
                    <tr> 
                        <?php
                        foreach ($etud as $et) {
                            ?>
                            <td><?php echo $et['NOMETUDIANT']; ?> </td>
                            <td><?php echo $et['PRENOMETUDIANT']; ?></td>
                            <td><?php echo '<a href=../Controller/C_note.php?codeetud=' . $et['codeetudiant'] . '>' ?>Saisir Notes <img src="../bootstrap-icons-1.8.3/pencil-square.svg" height="14" width="25"/></a> </td>
                            <td><?php echo '<a href=../Edition.php?codeetud=' . $et['codeetudiant'] . '>' ?>Editer  <img src="../bootstrap-icons-1.8.3/file-earmark-pdf.svg" height="14" width="25"/></a> </td>
                        </tr>

                        <?php
                        $_SESSION['codeclas'] = $valeur;
                    }
                }
                ?>
            </table>
        </main>
    </body>
</html>