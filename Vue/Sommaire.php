
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>

        <link href="../styles/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>

        <main>
            <nav class="navbar navbar-dark bg-light border-bottom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../Controller/C_accueil.php">Accueil<img src="../bootstrap-icons-1.8.3/house-door.svg" height="15" width="25"/></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample01">
                        <ul class="navbar-nav me-auto mb-2">
                            <li class="nav-item"><a class="nav-link" href="../Inscription.php">S'inscrire <img src="../bootstrap-icons-1.8.3/box-arrow-in-right.svg" height="14" width="25"/></a></li>
                            <li class="nav-item"><a class="nav-link" href="../Connexion.php">Se connecter <img src="../bootstrap-icons-1.8.3/door-open.svg" height="14" width="25"/></a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Administration</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                    <li><a class="dropdown-item" href="../Controller/C_prof.php">Enseignants <img src="../bootstrap-icons-1.8.3/person-circle.svg" height="14" width="25"/></a></li>
                                    <li><a class="dropdown-item" href="../Controller/C_matiere.php">Matières <img src="../bootstrap-icons-1.8.3/book.svg" height="14" width="25"/></a></li>
                                    <li><a class="dropdown-item" href="../Controller/C_affectation.php">Affectation <img src="../bootstrap-icons-1.8.3/person-check.svg" height="14" width="25"/></a></li>
                                    <li><a class="dropdown-item" href="../Controller/C_etudiant.php">Etudiants <img src="../bootstrap-icons-1.8.3/people.svg" height="14" width="25"/></a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="../Import_Export.php">Importer <img src="../bootstrap-icons-1.8.3/file-earmark-arrow-up.svg" height="14" width="25"/> 
                                            / Exporter une base de donnéee <img src="../bootstrap-icons-1.8.3/file-earmark-arrow-down.svg" height="14" width="25"/></a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="../Controller/C_classe.php">Saisir notes <img src="../bootstrap-icons-1.8.3/pencil-square.svg" height="14" width="25"/></a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Edition <img src="../bootstrap-icons-1.8.3/file-earmark-pdf.svg" height="14" width="25"/></a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Se déconnecter <img src="../bootstrap-icons-1.8.3/door-closed.svg" height="14" width="25"/></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </main>

        <div class="container">
            <footer class="py-2 my-2">
                <ul class="nav justify-content-center border-top fixed-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="Accueil.php" class="nav-link px-2 text-muted">Accueil</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Login</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">A propos de</a></li>
                    <li class="nav-item" > <a class="nav-link disabled">&copy; 2022</a></li>
                </ul>
            </footer>
        </div>
        <script src="../styles/bootstrap.bundle.min.js"></script>
    </body>
</html>
