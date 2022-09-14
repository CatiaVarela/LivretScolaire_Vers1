<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit</title>
        <link href="styles/cascade.css" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start();
        require 'Modele/Connexion_bd.php';
        $codeetudiant = filter_input(INPUT_GET, 'codeetud');
        $cla = $_SESSION['codeclas'];
        $etud = asso_cl_et($cla);
        $note = recupere_notes($codeetudiant);
        ?>

        <table border="1">
            <tr>
                <?php
                foreach ($etud as $et) {
                    ?>
                    <td>Classe: <?php echo $et['Libelleclasse'] ?></td>
                    <td colspan="2">Option :</td>
                    <td colspan="2">Nom: <?php echo $et['NOMETUDIANT'] . ' ' ?>Prénom:<?php echo $et['PRENOMETUDIANT'] ?></td>
                    <td colspan="2">Année: 2022</td>
                </tr>

                <tr>
                    <td rowspan="2">Spécialité: <?php echo $et['specialite'] ?></td>
                    <?php
                }
                ?>

                <th colspan="3">Classe de 1<sup>ère</sup> Année</th>
                <th rowspan="2">Matières</th>
                <th colspan="3">Classe de 2<sup>ème</sup> Année</th>
                <th rowspan="2">Appréciations</th>
            </tr>
            <tr>
                <th>Semestre 1</th>
                <th>Semestre 2</th>
                <th>Moyenne</th>
                <th>Semestre 1</th>
                <th>Semestre 2</th>
                <th>Moyenne</th>
            </tr>
            <tr>
                <td rowspan="10"> </td>
                <?php
                foreach ($note as $n) {
                    ?>
                    <td><?php echo $n['Semestre1'] ?></td>
                    <td><?php echo $n['Semestre2'] ?></td>
                    <td><?php echo $n['Moyenne'] ?></td>
                    <td><?php echo $n['LibMatiere'] ?></td>
                    <td><?php echo $n['Semestre3'] ?></td>
                    <td><?php echo $n['Semestre4'] ?></td>
                    <td></td>
                    <td><?php echo $n['Appreciation'] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
