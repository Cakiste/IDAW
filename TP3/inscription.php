<?php
    session_start();
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
    echo
    "<form id=\"login_form\" action=\"form.php\" method=\"POST\">
    <table>
    <tr>
    <th>Login :</th><td>
    <input type=\"text\" name=\"login\"></td></tr>
    <tr>
    <th>Pseudo :</th><td>
    <input type=\"text\" name=\"pseudo\"></td></tr>
    <tr>
    <th>Mot de passe :</th><td>
    <input type=\"password\" name=\"password\"></td></tr>
    <tr>
    <th></th>
    <td><input type=\"submit\" value=\"S'inscrire\" />
    </td></tr>
    </table>
    </form>";


    echo "<nav><ul><li><a href=\"login.php\">Login</a></li><li><a href=\"inscription.php\">Inscription</a></li><li><a href=\"connected.php\">Début</a></li><li><a href=\"suite.php\">Suite</a></li><li><a href=\"fin.php\">Fin</a></li></ul></nav>";
    if(isset($_SESSION['login'])){
        echo "<a href=\"connected.php?dc=t\">Disconnect</a>";
    }
?>