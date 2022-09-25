<html>
    <body>
        <div class="container">
            <footer style="margin-top: 30px">
                <ul class="nav justify-content-center border-top pb-3 mb-3">
                    <li class="nav-item"><a href="C_Accueil.php" class="nav-link px-2 text-muted">Accueil</a></li>
                    <?php
                    if (empty($_SESSION['connectname'])) {
                        echo "<li class=\"nav-item\"><a href=\"../Vue/Login.php\" class=\"nav-link px-2 text-muted\">Login</a></li>";
                    }
                    ?>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">A propos de</a></li>
                    <li class="nav-item" > <a class="nav-link disabled">&copy; 2022</a></li>
                </ul>
            </footer>
        </div>

        <script src="../styles/bootstrap.bundle.min.js"></script>
    </body>
</html>