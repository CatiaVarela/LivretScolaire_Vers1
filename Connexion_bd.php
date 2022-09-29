<?php

//initialisation de la connexion à la base de donnée voulue
function connexion() {
    try {
        $conn = new PDO('mysql:host=localhost;port=3307;dbname=livret', 'root', '');
    } catch (Exception $ex) {
        die('Erreur:' . $ex->getMessage());
    }return $conn;
}
//initialisation de la deconnexion de la base de donnée 
function deconnexion() {
    $conn = null;
    return $conn;
}

//initialisation de la vérification de la saisie dans note 
function verif_matiere_note($saisie) {
    if (filter_has_var(INPUT_POST, $saisie)) {
        $saisie = filter_input(INPUT_POST, $saisie, FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
        return $saisie;
    }
}

//initialisation de la vérification saisie 
function verif_saisi($saisie) {
    //condition verifiant si la variable spécifié de tel type existe.
    if (filter_has_var(INPUT_POST, $saisie)) {
        $saisie = filter_input(INPUT_POST, $saisie, FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY);
        $saisi = implode($saisie);
        return $saisi;
    }
}

//initialisation de la vérification de l'envoie
function verif_submit($envoyer) {
    //condition verifiant si l'envoie c'est bien effectué
    if (filter_input(INPUT_POST, $envoyer) != NULL) {
        $envoyer = filter_input(INPUT_POST, $envoyer);
    }
    return $envoyer;
}

//initialisation de la vérification de charactere
function filtrer_character($nombre) {
    //condition vérifant si il y a des caractéres de type int
    if (filter_input(INPUT_POST, $nombre) == NULL) {
        $tab = filter_input(INPUT_POST, $nombre, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
        $nombre = filter_var_array($tab);
    }
    return $nombre;
}

//initialisation de la récuperation des enseignants
function recupere_enseignants() {
    $enseignant = connexion()->prepare("SELECT * FROM ENSEIGNANT");
    $enseignant->execute();
    $profs = $enseignant->fetchAll(PDO::FETCH_ASSOC);
    return $profs;
}

//initialisation de l'insertion des enseigants
function insert_enseignants() {
    $name = filter_input(INPUT_POST, "nom");
    $firstname = filter_input(INPUT_POST, "prenom");
    $ens = connexion()->prepare("INSERT INTO ENSEIGNANT(NOMENSEIGNANT,PRENOMENSEIGNANT) VALUES(:name,:firstname)");
    //condition verifiant si les variables sont déclarées et different de NULL
    if (isset($name) && $firstname) {
        $ens->bindParam(':name', $name, PDO::PARAM_STR);
        $ens->bindParam(':firstname', $firstname, PDO::PARAM_STR);
        $ens->execute();
    }return $ens;
}

//initialisation de la modification du nom et prénom enseignant
function modif_ens($codeenseignant) {
    $nomens = filter_input(INPUT_POST, "nomens");
    $prenomens = filter_input(INPUT_POST, "prenomens");
    //condition qui modifié dans la bd le nom ou prénom
    if ($nomens) {
        $modifn = connexion()->prepare("UPDATE enseignant SET NOMENSEIGNANT ='" . $nomens . "' WHERE CodeEnseignant = :codeens");
        $modifn->bindParam(':codeens', $codeenseignant, PDO::PARAM_INT);
        $modifn->execute();
        echo 'nom modifié' . ' ';
    }
    if ($prenomens) {
        $modifp = connexion()->prepare("UPDATE enseignant SET PRENOMENSEIGNANT ='" . $prenomens . "' WHERE CodeEnseignant = :codeens");
        $modifp->bindParam(':codeens', $codeenseignant, PDO::PARAM_INT);
        $modifp->execute();
        echo 'prénom modifié' . ' ';
    }
}

//initialisation de la suppresion enseignant
function supprimer_enseignant($codeenseignant) {
    $supp_ens = connexion()->prepare("DELETE from enseignant WHERE CodeEnseignant =:codeens");
    $supp_ens->bindParam(':codeens', $codeenseignant, PDO::PARAM_INT);
    $supp_ens->execute();
    return $supp_ens;
}

//initialisation de la récupération d'une matière 
function recupere_matieres() {
    $matiere = connexion()->prepare("SELECT * FROM Matiere");
    $matiere->execute();
    $m = $matiere->fetchAll(PDO::FETCH_ASSOC);
    return $m;
}

//initialisation de l'insertion d'une nouvelle matière
function insert_matieres() {
    $matiere = filter_input(INPUT_POST, "matieres");
    $ajoutmat = connexion()->prepare("INSERT INTO MATIERE(LibMatiere) VALUES(:matiere)");
    if (isset($matiere)) {
        $ajoutmat->bindParam(':matiere', $matiere, PDO::PARAM_STR);
        $ajoutmat->execute();
    }return $ajoutmat;
}

//initialisation de la modification de la matière
function modif_matiere($codematiere) {
    $matiere = filter_input(INPUT_POST, "matiere");
    if ($matiere) {
        $modifm = connexion()->prepare("UPDATE Matiere SET LibMatiere ='" . $matiere . "' WHERE CodeMatiere =:codemat");
        $modifm->bindParam(':codemat', $codematiere, PDO::PARAM_INT);
        $modifm->execute();
        return $modifm;
    }
}

//initialisation d'une suppresion d'une matière
function supprimer_matiere($codematiere) {
    $suppm = connexion()->prepare("DELETE from matiere WHERE CodeMatiere =:codemat");
    $suppm->bindParam(':codemat', $codematiere, PDO::PARAM_INT);
    $suppm->execute();
    return $suppm;
}

//initialisation de la récupération de la classe
function recupere_classes() {
    $classe = connexion()->prepare("SELECT * FROM Classe");
    $classe->execute();
    $c = $classe->fetchAll(PDO::FETCH_ASSOC);
    return $c;
}

//initialisation de l'association entre la tableau classe et asso_9 de la bd
function asso_cl_et($valeur) {
    $etud = connexion()->prepare("SELECT * from asso_9 join classe on classe.classecode = asso_9.classecode join Etudiant on Etudiant.codeetudiant = asso_9.codeetudiant where asso_9.classecode =" . $valeur);
    $etud->execute();
    $et = $etud->fetchAll(PDO::FETCH_ASSOC);
    return $et;
}

//initialisation de la récupération d'étudiant
function recupere_etudiants() {
    $req = connexion()->prepare("SELECT * from etudiant");
    $req->execute();
    $r = $req->fetchAll(PDO::FETCH_ASSOC);
    return $r;
}

//initialisation de la modification de l'étudiant
function modif_etud($codeetudiant) {
    $nometu = filter_input(INPUT_POST, "nometu");
    $prenometu = filter_input(INPUT_POST, "prenometu");
    $datenaissance = filter_input(INPUT_POST, "date");
    $classe = filter_input(INPUT_POST, "classe");

    if ($nometu) {
        $modifetu = connexion()->prepare("UPDATE etudiant SET NomEtudiant ='" . $nometu . "' WHERE codeetudiant = :codeetud");
        $modifetu->bindParam(':codeetud', $codeetudiant, PDO::PARAM_INT);
        $modifetu->execute();
        return $modifetu;
    }
    if ($prenometu) {
        $modifetu = connexion()->prepare("UPDATE etudiant SET PrenomEtudiant ='" . $prenometu . "' WHERE codeetudiant = :codeetud");
        $modifetu->bindParam(':codeetud', $codeetudiant, PDO::PARAM_INT);
        $modifetu->execute();
        return $modifetu;
    }
    if ($datenaissance) {
        $modifetu = connexion()->prepare("UPDATE etudiant SET Datedenaissance ='" . $datenaissance . "' WHERE codeetudiant = :codeetud");
        $modifetu->bindParam(':codeetud', $codeetudiant, PDO::PARAM_INT);
        $modifetu->execute();
        return $modifetu;
    }
    if ($classe) {
        $modifetu = connexion()->prepare("UPDATE etudiant SET Classe ='" . $classe . "' WHERE codeetudiant = :codeetud");
        $modifetu->bindParam(':codeetud', $codeetudiant, PDO::PARAM_INT);
        $modifetu->execute();
        return $modifetu;
    }
}

//initialisation de la suppresion de l'étudiant
function supprimer_etudiant($codeetudiant) {
    $supp_etud = connexion()->prepare("DELETE from etudiant WHERE codeetudiant =:codeetud");
    $supp_etud->bindParam(':codeetud', $codeetudiant, PDO::PARAM_INT);
    $supp_etud->execute();
    return $supp_etud;
}

//initialisation de la récupération des matières enseignées
function recupere_enseigner($classe) {
    $mat = connexion()->prepare("SELECT * FROM enseigner join matiere on enseigner.CodeMatiere = matiere.CodeMatiere where enseigner.CLASSECODE =" . $classe);
    $mat->execute();
    $m = $mat->fetchAll(PDO::FETCH_ASSOC);
    return $m;
}

//initialisation de l'insertion des matières enseignées
function insert_enseigner($classe, $matiere, $enseignant) {
    $inserer = connexion()->prepare("INSERT INTO enseigner(classecode,CodeMatiere,CodeEnseignant) VALUES(:classe,:matiere,:enseignant)");
    $inserer->bindParam(':classe', $classe, PDO::PARAM_INT);
    $inserer->bindParam(':matiere', $matiere, PDO::PARAM_INT);
    $inserer->bindParam(':enseignant', $enseignant, PDO::PARAM_INT);
    $inserer->execute();
    return $inserer;
}

//initialisation de la récupération des notes
function recupere_notes($codeetudiant) {
    $note = connexion()->prepare("select * from note_etudiant join etudiant on note_etudiant.Codeetudiant = etudiant.codeetudiant 
                                  join matiere on note_etudiant.codematiere = matiere.codematiere 
                                  where note_etudiant.codeetudiant=:codeetud order by Libmatiere");
    $note->bindParam(':codeetud', $codeetudiant, PDO::PARAM_INT);
    $note->execute();
    return $note;
}

//initialisation des saisies des notes
function note_saisie($semestre1, $semestre2, $appreciation, $codeetudiant, $codematiere, $codeclasse) {
    $note = connexion()->prepare("INSERT INTO note_etudiant(Semestre1,Semestre2,Appreciation,CodeEtudiant,CodeMatiere,Classecode) values(:S1,:S2,:app,:codeetud,:codemat,:codeclas) on duplicate key update Semestre1 = :S1, Semestre2 = :S2, Appreciation=:app");
    $note->bindParam(':S1', $semestre1, PDO::PARAM_STR);
    $note->bindParam(':S2', $semestre2, PDO::PARAM_STR);
    $note->bindParam(':app', $appreciation, PDO::PARAM_STR);
    $note->bindParam(':codeetud', $codeetudiant, PDO::PARAM_INT);
    $note->bindParam(':codemat', $codematiere, PDO::PARAM_INT);
    $note->bindParam(':codeclas', $codeclasse, PDO::PARAM_INT);
    $note->execute();
    return $note;
}
 