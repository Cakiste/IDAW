<?php
require_once('template_header.php')
?>

<body class="body">
    <h1 class="text">CV</h1>
    <?php
    require_once('template_menu.php');
    renderMenuToHTML('cv');
    ?>
    <iframe src="/Vinchon.pdf" class="pdf"></iframe>
    <!--Marche quand on y accède par un virtualhost mais pas avec localhost/IDAW/Exo#/cv.html-->
    <?php
    require_once('template_footer.php');
    ?>
</body>

</html>