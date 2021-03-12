<?php
require_once("header.php");
$currentPageId ='accueil';
if(isset($_GET['page'])) {$currentPageId = $_GET['page'];
}
?>
<html lang="fr">

<section class="corps">
<?php
if(isset($_GET['lang'])){
  if($_GET['lang']=='fr'){ $pageToInclude = "fr/".$currentPageId . ".php";}
  else if($_GET['lang']=='en'){ $pageToInclude = "en/".$currentPageId . ".php";}
}
else{$pageToInclude = "fr/".$currentPageId . ".php";}
if(is_readable($pageToInclude))
require_once($pageToInclude);
else 
require_once("error.php");
?>
</section>
</body>
<?php 
require_once("footer.php");
?>