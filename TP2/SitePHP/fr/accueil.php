<html lang="fr">
<body class="body">
    <h1 class="text">Accueil</h1>
    <p class="text"> Il est 
    <?php
    date_default_timezone_set('Europe/Paris');
    echo date('h:i');
    ?>.
    </p>
    <?php
    require_once('menu.php');
    renderMenuToHTML('accueil');
    ?>
    <div>
        <img src="darth.jpg" class="centered" alt="Did you ever hear the tragedy of Darth Plagueis The Wise?" title="Did you ever hear the tragedy of Darth Plagueis The Wise?">
        <p class="text"><br>Did you ever hear the tragedy of Darth Plagueis The Wise? I thought not. It's not a story the Jedi would tell you. It's a Sith legend. Darth Plagueis was a Dark Lord of the Sith, so powerful and so wise he could use the Force to influence the midichlorians to create life… He had such a knowledge of the dark side that he could even keep the ones he cared about from dying. The dark side of the Force is a pathway to many abilities some consider to be unnatural. He became so powerful… the only thing he was afraid of was losing his power, which eventually, of course, he did. Unfortunately, he taught his apprentice everything he knew, then his apprentice killed him in his sleep. Ironic. He could save others from death, but not himself.</p>
      </div>
