<?php
require('lib/connex.php');
$sql = "SELECT * FROM forum";
$result =  mysqli_query($connex, $sql);
?>

<h1>Bienvenue au Forum </h1>

<?php if (!$_SESSION): ?>
    <!-- Handle the case where the user is not logged in -->
<?php else: ?>
    <h2>Hello <?= $_SESSION['nom']; ?></h2>
    <div class="forum-container">
        <?php foreach ($result as $row): ?>
            <div class="forum-post">
                <h3><?= $row['titre']; ?></h3>
                <p><?= $row['article']; ?></p>
                <p>Date: <?= $row['date']; ?></p>
                <p>Author: <?= $row['auteur']; ?></p>
                <p class="invisible">User ID: <?= $row['utilisateur_id']; ?></p>
                <div class="separer">
                            <a href="index.php?controller=forum&function=formedit&id=<?= $row['id']; ?>"><button class="btn" type="submit" >Editer</a>
                            <a href="index.php?controller=forum&function=deleteArticle&id=<?= $row['id']; ?>"><button class="btn btn-danger" type="submit" >Éffacé</a>
                        </div>
                
        <?php endforeach; ?> 
    </div>
<?php endif; ?>

<a class="btn-danger" href="index.php?controller=forum&function=logout">Logout</a>

