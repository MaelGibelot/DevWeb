<html>
<body>
<form method="get" action="/Annonce/create">
    <label for="villedep">Ville Départ</label>
    <input type="text" id="villedep" name="villedep" required="required">
    <br>
    <!--<label for="villearr">Ville arrivée</label>
    <input type="text" id="villearr" name="villearr" required="required">
    <br>
    <label for="date">Date</label>
    <input type="text" id="date" name="date" required="required">
    <br>
    <label for="voitmodele">Modèle de la voiture</label>
    <input type="text" id="voitmodele" name="voitmodele" required="required">
    <br>
    <label for="nbplace">Nombre de places</label>
    <input type="text" id="nbplace" name="nbplace" required="required">
    <br>
    <label for="email">email</label>
    <input type="email" id="email" name="email" required="required">
    <br>
    <label for="desc">Description</label>
    <input type="text" id="desc" name="desc" required="required"> -->
    <input type="submit" value="Envoyer">
</form>

<?php

$id = $_GET['id'];

$villedep = $_GET['villedep'];
/*$villearr = $_POST['villearr'];
$date = $_POST['date'];
$voitmodele = $_POST['voitmodele'];
$nbplace = $_POST['nbplace'];
$email = $_POST['email'];
$desc = $_POST['desc'];
?>
</body>
</html>