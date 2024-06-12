<h1>Liste des Continents</h1>

<a href="<?= PATH ?>/continents/ajout"><button type='button' class='btn btn-primary fas fa-plus'>Ajouter</button></a><br/>

<table  class="table table-dark table-hover">
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Actions</th>
    </tr>

<?php foreach($continents as $continent): ?>
 
    <tr>
        <td><?= $continent['ID_CONTINENT'] ?></td>
        <td><?= $continent['NOM_CONTINENT'] ?></td>
        <td>
            <a href="<?= PATH ?>/continents/modif/<?= $continent['ID_CONTINENT'] ?>"><button class='btn btn-info btn-sm fas fa-pencil-alt fa-sm'></button></a>
            <a href="<?= PATH ?>/continents/suppr/<?= $continent['ID_CONTINENT'] ?>"><button class='btn btn-danger btn-sm fas fa-trash-alt fa-sm'></button></a>
        </td>
    </tr>

<?php endforeach ?>

</table>
