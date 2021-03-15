<form id="style_form" action="index.php" method="POST">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>
<?php 
if(isset($_POST['css'])){
    setcookie("style",$_POST['css']);
}
//en utilisation réel il faudrait avoir le code à la suite dans le header.php par exemple, et faire le <link> avec href=$_css.css (ici pas de style ni de page à afficher)
if (isset($_COOKIE['style'])){
    $_css = $_COOKIE['style'];
}
else
    $_css = "style1";
print($_css)
?>