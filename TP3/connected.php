<?php
// on simule une base de données
    session_start();
    if (isset($_GET['dc'])){
        unset($_SESSION['login']);
    }
	$users = array(
	// login => password
		'riri'=>'fifi',
		'yoda'=>'maitrejedi');
	$login = "anonymous";
    $errorText="Vous n'êtes pas connecté";
	$successfullyLogged = false;
	if(isset($_POST['login']) && isset($_POST['password'])) {
		$tryLogin=$_POST['login'];
		$tryPwd=$_POST['password'];
		// si login existe et password correspond
		if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
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
    echo "<nav><ul><li><a href=\"login.php\">Login</a></li><li><a href=\"connected.php\">Début</a></li><li><a href=\"suite.php\">Suite</a></li><li><a href=\"fin.php\">Fin</a></li></ul></nav>";
    if(isset($_SESSION['login'])){
        echo "<a href=\"connected.php?dc=t\">Disconnect</a>";
    }
?>