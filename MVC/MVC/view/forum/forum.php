<?php
require('lib/connex.php');
$sql = "SELECT * FROM forum  ORDER BY date DESC LIMIT 5;";
$result =  mysqli_query($connex, $sql);
?>

<h1>Bienvenue au Forum</h1>
<?php if ($_SESSION) : ?>
    <h2>Bonjour, <?= $_SESSION['nom']; ?></h2>
<?php endif; ?>
<div class="forum-container">
    <?php foreach ($result as $row) : ?>
        <div class="forum-post">
            <h3><?= $row['titre']; ?></h3>
            <p><?= $row['article']; ?></p>
            <p>Date: <?= $row['date']; ?></p>
            <p>Author: <?= $row['auteur']; ?></p>
            <p class="invisible">User ID: <?= $row['utilisateur_id']; ?></p>
            <?php if ($_SESSION['id'] == $row['utilisateur_id']) : ?>
                <div>
                    <a href="index.php?controller=forum&function=formedit&id=<?= $row['id']; ?>"><button class="btn" type="submit">Editer</button></a>
                    <a href="index.php?controller=forum&function=deleteArticle&id=<?= $row['id']; ?>"><button class="btn btn-danger" type="submit">Éffacé</button></a>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
<?php
?>