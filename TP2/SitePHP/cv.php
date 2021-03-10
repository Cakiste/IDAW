<?php
require_once('template_header.php')
?>

<body class="body">
    <h1 class="title">CV</h1>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a id="selected" href="cv.php">CV</a></li>
            <li><a href="hobbies.php">Hobbies</a></li>
        </ul>
    </nav>
    <iframe src="/Vinchon.pdf" class="pdf"></iframe>
    <!--Marche quand on y accède par un virtualhost mais pas avec localhost/IDAW/Exo#/cv.html-->
</body>

</html>