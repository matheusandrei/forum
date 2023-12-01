<?php
require_once('lib/checkSession.php');
?>


<form action="index.php?controller=forum&function=creerUnArticle" method="post">
<h1>Article</h1>
    <div>
        <label for="titre">Titre:</label>
        <input type="text" id="titre" name="titre" required>
    </div>
    <div>
        <label for="article">Article:</label>
        <textarea id="article" name="article" maxlength="1000" required> </textarea>
    </div>
    <div>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
    </div>
    <div>
        <input type="hidden" name="auteur" value="<?= $_SESSION['nom']; ?>">
        <input type="hidden" name="utilisateur_id" value="<?= $_SESSION['id']; ?>">
    </div>
    <input type="submit" value="Publier">
</form>