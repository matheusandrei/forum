<form action="index.php?controller=forum&function=editer" method="post">

    <div>
        <label for="titre">Titre:</label>
        <input type="text" id="titre" name="titre" value="<?= $data['titre']; ?>">
    </div>
    <div>
        <label for="article">Article:</label>
        <textarea id="article" name="article" maxlength="1000" value="<?= $data['article']; ?>"> </textarea>

    </div>
    <div>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" disabled value="<?= $data['date'];  ?>">
    </div>
    <div>
        <input type="hidden" name="utilisateur_id" value="<?= $data['id']; ?>">
    </div>
    <input type="submit" value="editer">
</form>