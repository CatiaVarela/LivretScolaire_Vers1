<html>
    <body>
        <main class="container">
            <h2>Modification</h2>
            <?php
            if ($codemat) {
                ?>
                <form method="post" class="form-control">
                    Nouvelle matière : <input type="text" name="matiere" required/>
                    <input type="submit" value="Valider" name="saisie_ma" id="submit"/>
                </form>
                <?php
            }
            ?>

            <?php
            if ($codeens) {
                ?> 
                <form method="post" class="form-control">
                    Nouveau nom enseignant : <input type="text" name="nomens" /><br>
                    Nouveau prenom enseignant : <input type="text" name="prenomens" /><br>
                    <input type="submit" value="Valider" name="saisie_en" id="submit"/>
                </form>
                <?php
            }
            ?>

            <?php
            if ($codeetudiant) {
                ?> 
                <form method="post" class="form-control">
                    Nouveau nom etudiant: <input type="text" name="nometu" />
                    Nouveau prenom etudiant : <input type="text" name="prenometu" />
                    Nouvelle date de naissance : <input type="text" name="date"/>
                    Nouvelle classe : <input type="text" name="classe" />
                    <input type="submit" value="Valider" name="saisie_et" id="submit"/>
                </form>
                <?php
            }
            ?>
        </main>        
    </body>
</html>