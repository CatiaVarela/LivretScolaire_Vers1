<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion...</title>
</head>
<body>

    <?php

        session_start();

        try {

            $errors = 0;

            $dsn = new PDO('mysql:host=localhost;dbname=livret;charset=utf8', 'root', '');

            $user = $_POST['username'];
            $password_1 = $_POST['password'];
            
            if( empty($_POST["admin"])){
                $isadmin = "off";
            }else{
                $isadmin = "on";
            }

            $pass = $password_1;
            
            if ($isadmin == "on"){
                $sql = "SELECT * FROM administrateur WHERE NOMADMIN = :username";
            }else{
                $sql = "SELECT * FROM enseignant WHERE NOMENSEIGNANT = :username";
            }
            
            $stmt = $dsn->prepare($sql);

            $stmt->bindValue(':username', $user);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if (empty($row)) {  //Si l'utilisateur n'existe pas

                $errors = ($errors + 1);
                echo "<div class=\"return\"><h2>Cet utilisateur n'existe pas !<br/></h2></div>";

            }else{
                
                if ($isadmin == "on"){
                    $sql = "SELECT * FROM administrateur WHERE NOMADMIN = :username and MDPADMIN = :password";
                }else{
                    $sql = "SELECT * FROM enseignant WHERE NOMENSEIGNANT = :username and MDPENSEIGNANT = :password";
                }
                $stmt = $dsn->prepare($sql);

                $stmt->bindValue(':username', $user);
                $stmt->bindValue(':password', $pass);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if (empty($row)) {  //Si le mot de passe est incorrect
                    $errors = ($errors + 1);
                    echo "<div class=\"return\"><h2>Le mot de passe est incorrect<br/></h2></div>";
                }
            }
            
            if ($errors == 0){
                
                if ($isadmin == "on"){
                    $sql = "SELECT * FROM administrateur WHERE NOMADMIN = :username";
                }else{
                    $sql = "SELECT * FROM enseignant WHERE NOMENSEIGNANT = :username";
                }
                
                $stmt = $dsn->prepare($sql);

                $stmt->bindValue(':username', $user);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                $_SESSION['connectperm'] = $row['Permission'];
                
                if ($isadmin == "on"){
                    $_SESSION['connectname'] = $row['NOMADMIN'];
                }else{
                    $_SESSION['connectname'] = $row['NOMENSEIGNANT'];
                }
                header("location: ./C_accueil.php");

            }else{
                echo "<a href=\"../Vue/Login.php\" class=\"button\">Réésayer</a>";
            }

        }catch(PDOException $e){
            $error = "Erreur: " . $e->getMessage();
            echo '<script type="text/javascript">alert("'.$error.'");</script>';
        }
     require_once '../Vue/Footer.php';
    ?>

</body>
</html>