<html>
    <body>
        <main class="container">    
            <div id="texte" >
                <h3>Affectation d'enseignants et de matières à une classe</h3>

                <form action=" " method="post">
                    <p>Liste des enseignants :</p>
                    <select name="liste[]" required>
                        <option value="">Enseignants : </option>
                        <?php
                        foreach ($enseignant as $e) {
                            echo "\t" . '<option value=' . $e['CodeEnseignant'] . '>' . $e['NOMENSEIGNANT'] . " " . $e['PRENOMENSEIGNANT'] . '</option>' . "\n";
                        }
                        ?>
                    </select><br>   

                    <?php
                    echo '<br>Cochez la/les matières suivantes : <br>';
                    foreach ($matiere as $m) {
                        echo "<input type='checkbox'name='matiere[]'value=" . $m['CodeMatiere'] . "</input> &nbsp" . $m['LibMatiere'] . "<br>";
                    }
                    echo '<br>';
                    ?>

                    <select name="class[]" required>
                        <option value ="">Classe :</option> 
                        <?php
                        foreach ($classe as $c) {
                            echo "\t" . '<option value=' . $c['classecode'] . '>' . $c['Libellecourt'] . '</option>' . "\n";
                        }
                        ?>
                    </select>

                    <input type="submit" value="Valider" name="sub"/> </form>      
            </div>
        </main>
    </body>
</html>