<?php
session_start();
if(isset($_SESSION['login'])){
    echo("<h1>".$_SESSION['login']."</h1>");
}
echo "<nav><ul><li><a href=\"login.php\">Login</a></li><li><a href=\"inscription.php\">Inscription</a></li><li><a href=\"connected.php\">Début</a></li><li><a href=\"suite.php\">Suite</a></li><li><a href=\"fin.php\">Fin</a></li></ul></nav>";
    echo "<a href=\"connected.php?dc=t\">Disconnect</a>";
}
?>