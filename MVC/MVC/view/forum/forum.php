


<h1>Bienvenue au Forum <?php $_SESSION['nom']?></h1>

<?php
require('lib/connex.php');
$sql  = "SELECT * FROM forum";
$result =  mysqli_query($connex, $sql);


if(!$_SESSION){

    
}else{


?>

        <h2>Hello <?= $_SESSION['nom'];
    }?></h2>
        <table>
            <tr>
                <th>Titre</th>
                <th>Article</th>
                <th>Date</th>
                <th>Author</th>
                <th class="invisible">utilisateur_id</th>
        
            </tr>
            <?php 
                foreach($result as $row) {

            ?>
            <tr>
                <td><?= $row['titre']; ?></td>
                <td><?= $row['article']; ?></td>
                <td><?= $row['date']; ?></td>
                <td><?= $row['auteur']; ?></td>
                <td class="invisible"><?= $row['utilisateur_id']; ?></td>
    

            </tr>
            <?php
                }
            ?>
        </table>

    <a href="index.php?controller=forum&function=logout">logout</a>