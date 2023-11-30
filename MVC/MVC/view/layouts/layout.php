<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?controller=utilisateur">utilisateur</a></li>
            <li><a href="index.php?controller=utilisateur&function=create">Ajouter utilisateur</a></li>
            <li><a href="index.php?controller=utilisateur&function=store">login</a></li>
            <?php
    // Vérifier si l'utilisateur est connecté
    if (isset($_SESSION['fingerPrint'])) {
        // Utilisateur connecté, afficher le lien pour ajouter un article
        echo '<li><a href="index.php?controller=forum&function=afficherFormArticle">Ajouter un article</a></li>';
    }else{
        
        echo '<li class="invisible"><a href="index.php?controller=forum&function=afficherFormArticle">Ajouter un article</a></li>';
    }
    ?>

        </ul>
    </nav>
    <div class="container">
        <?php echo $content; ?>
    </div>

</body>
</html>