<table>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Courriel</th>
        <th>Show</th>
    </tr>
    <?php foreach($data as $utilisateur){ ?>
    <tr>
        <td><?= $utilisateur['id']?></td>
        <td><?= $utilisateur['nom']?></td>
        <td><?= $utilisateur['courriel']?></td>
        <td><a href="index.php?controller=utilisateur&function=view&id=<?= $utilisateur['id']?>">Show</a></td>
    </tr>
    <?php } ?>
</table>