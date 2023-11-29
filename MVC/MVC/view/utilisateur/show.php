
<p> <strong>Nom : </strong><?= $data['nom']; ?></p>
<p> <strong>Adresse : </strong><?= $data['adresse']; ?></p>
<p> <strong>Courriel : </strong><?= $data['courriel']; ?></p>
<a href="index.php?controller=utilisateur&function=edit&id=<?= $data['id']; ?>" class="btn">Modifier</a>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <input type="submit" class="btn-danger" value="Effacer">
</form>
