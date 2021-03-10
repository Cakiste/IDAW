<?php
require_once('template_header.php')
?>

<body class="body">
    <h1 class="text">Accueil</h1>
    <p> Il est 
    <?php
    date_default_timezone_set('Europe/Paris');
    echo date('h:i');
    ?>.
    </p>
    <nav>
        <ul>
            <li><a id="selected" href="index.php">Accueil</a></li>
            <li><a href="cv.php">CV</a></li>
            <li><a href="hobbies.php">Hobbies</a></li>
        </ul>
    </nav>
    <div>
        <img src="darth.jpg" class="centered" alt="Did you ever hear the tragedy of Darth Plagueis The Wise?" title="Did you ever hear the tragedy of Darth Plagueis The Wise?">
        <p class="text"><br>Did you ever hear the tragedy of Darth Plagueis The Wise? I thought not. It's not a story the Jedi would tell you. It's a Sith legend. Darth Plagueis was a Dark Lord of the Sith, so powerful and so wise he could use the Force to influence the midichlorians to create life… He had such a knowledge of the dark side that he could even keep the ones he cared about from dying. The dark side of the Force is a pathway to many abilities some consider to be unnatural. He became so powerful… the only thing he was afraid of was losing his power, which eventually, of course, he did. Unfortunately, he taught his apprentice everything he knew, then his apprentice killed him in his sleep. Ironic. He could save others from death, but not himself.</p>
      </div>
</body>

</html>