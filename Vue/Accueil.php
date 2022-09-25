<html>
    <body>
        <main class="container">
            <h1>Accueil</h1>

            <?php
            if (isset($_SESSION['connectperm']) && $_SESSION['connectname'] != "") {
                echo '<div class="welcome">
                        <h1>Bonjour ' . $_SESSION['connectname'] . '</h1>
                      </div>';
            }
            ?>
        </main>
    </body>
</html>