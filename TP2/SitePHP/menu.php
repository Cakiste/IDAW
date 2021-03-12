<?php 
function renderMenuToHTML($currentPageId) {
    $mymenu = array(
        'accueil'=> array('Accueil','Home'),
        'cv'=> array('CV','Resume'),
        'hobbies'=> array('Hobbies','Hobbies'),
        'contact'=> array('Contact','Contact Info'));
        echo "<nav class=\"menu\"><ul>";
        if(isset($_GET['lang'])){
        if($_GET['lang']=='fr'){
            foreach($mymenu as $pageId => $pageParameters) {
                if($currentPageId == $pageId){
                    echo "<li><a href=\"index.php?page=$pageId&lang=fr\" id=\"selected\">".$pageParameters[0]."</a></li>";
                }
                else {echo "<li><a href=\"index.php?page=$pageId&lang=fr\">".$pageParameters[0]."</a></li>";}}
                echo"</ul></nav>";
                echo "<a href=\"index.php?page=$currentPageId&lang=en\">English</a> ";
            }    
        else if($_GET['lang']=='en'){
            foreach($mymenu as $pageId => $pageParameters) {
                if($currentPageId == $pageId){
                    echo "<li><a href=\"index.php?page=$pageId&lang=en\" id=\"selected\">".$pageParameters[1]."</a></li>";
                }
                else {echo "<li><a href=\"index.php?page=$pageId&lang=en\">".$pageParameters[1]."</a></li>";}}
                echo"</ul></nav>";   
                echo "<a href=\"index.php?page=$currentPageId&lang=fr\">Français</a> ";
            }    
        }
        else{
            foreach($mymenu as $pageId => $pageParameters) {
                if($currentPageId == $pageId){
                    echo "<li><a href=\"index.php?page=$pageId&lang=fr\" id=\"selected\">".$pageParameters[0]."</a></li>";
                }
                else {echo "<li><a href=\"index.php?page=$pageId&lang=fr\">".$pageParameters[0]."</a></li>";}}
                echo"</ul></nav>";
                echo "<a href=\"index.php?page=$currentPageId&lang=en\">English</a> ";
            }
        }
?>