<?php
    session_start();
    if (isset($_GET['dc'])){
        unset($_SESSION['login']);
    }
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
    $result = $conn->query("SELECT * from user");
    while( $row = $result->fetch_assoc()){
        $users[$row['login']] = $row; // Inside while loop
    }
	$login = "anonymous";
    $errorText="Vous n'êtes pas connecté";
	$successfullyLogged = false;
	if(isset($_POST['login']) && isset($_POST['password'])) {
		$tryLogin=$_POST['login'];
		$tryPwd=$_POST['password'];
		// si login existe et password correspond
		if( array_key_exists($tryLogin,$users) && $users[$tryLogin]['password']==$tryPwd ) {
            $_SESSION['login']=$tryLogin;
			$successfullyLogged = true;
		} else 
			$errorText = "Erreur de login/password";
    }
	if(isset($_SESSION['login'])){
        echo("<h1>Bienvenu ".$_SESSION['login']."</h1>");
    }
    else{
        echo($errorText);
    }
    echo "<nav><ul><li><a href=\"login.php\">Login</a></li><li><a href=\"inscription.php\">Inscription</a></li><li><a href=\"connected.php\">Début</a></li><li><a href=\"suite.php\">Suite</a></li><li><a href=\"fin.php\">Fin</a></li></ul></nav>";
    if(isset($_SESSION['login'])){
        echo "<a href=\"connected.php?dc=t\">Disconnect</a>";
    }
?>