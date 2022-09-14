
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'Modele/Connexion_bd.php';
        require './Vue/Sommaire.php';
        ?>
        <main class="container">
            <form action="" method="post"  style="display: inline-table">
                <h3>Exportation <img src="bootstrap-icons-1.8.3/download.svg" height="14" width="25"/></h3>
                <input type='submit' name='Export' value='Exporter'>
            </form>
<!--            &emsp;&emsp;&emsp;&emsp;
            <form action="" method="post" style="display: inline-table">
                <h3>Importation </h3>
                <input type='file' name='Import' accept='.sql,.txt' required/><br><br>
                <input type='submit' name='Importer' value='Importer'/><img src="bootstrap-icons-1.8.3/upload.svg" height="14" width="25"/>
            </form>-->
        </main>

    </body>
</html>
