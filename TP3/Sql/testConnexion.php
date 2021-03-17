<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $base = 'idaw';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password, $base);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie </br>';
            

            $result = $conn->query("SELECT * from user");

            while ($row = $result->fetch_assoc()) {
                echo " id = " . $row['id'];
                echo " / Login = " . $row['login'];
                echo " / Password = " . $row['password'];
                echo " / Pseudo = " . $row['pseudo'] . "</br>";
            }
        ?>
    </body>
</html>