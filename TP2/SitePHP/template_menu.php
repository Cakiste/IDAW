<?php 
function renderMenuToHTML($currentPageId) {
    $mymenu = array(
        'index'=> array('Accueil'),
        'cv'=> array('CV'),
        'hobbies'=> array('Hobbies'));
        echo "<nav class=\"menu\"><ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        if($currentPageId == $pageId){
            echo "<li><a href=\"$pageId.php\" id=\"selected\">".$pageParameters[0]."</a></li>";
        }
        else {echo "<li><a href=\"$pageId.php\">".$pageParameters[0]."</a></li>";}
    }    
        echo"</ul></nav>";
    }
?>