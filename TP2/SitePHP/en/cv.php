<body class="body">
    <h1 class="text">Resume</h1>
    <?php
    require_once('menu.php');
    renderMenuToHTML('cv');
    ?>
    </br>
    <iframe src="/Vinchon_CV.pdf" class="pdf"></iframe>
    <!--Marche quand on y accède par un virtualhost mais pas avec localhost/IDAW/Exo#/cv.html-->