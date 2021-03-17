<?php    
    $login = $_POST['login'];
    $pseudo = $_POST['pseudo'];
    $pass = $_POST['password'];

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
    $sql="INSERT INTO user (login, password, pseudo) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss",$login,$pass,$pseudo);
    $stmt->execute();

    header("Location:form-done.html");

?>