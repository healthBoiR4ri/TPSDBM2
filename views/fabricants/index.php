<h1>Liste des Fabricants</h1>

<a href="<?= PATH ?>/fabricants/ajout"><button type='button' class='btn btn-primary fas fa-plus'>Ajouter</button></a><br />

<table class="table table-dark table-hover">
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($fabricant as $fabricant) : ?>

        <tr>
            <td><?= $fabricant['ID_FABRICANT'] ?></td>
            <td><?= $fabricant['NOM_FABRICANT'] ?></td>
            <td>
                <a href="<?= PATH ?>/fabricants/modif/<?= $fabricant['ID_FABRICANT'] ?>"><button class='btn btn-info btn-sm fas fa-pencil-alt fa-sm'></button></a>
                <a href="<?= PATH ?>/fabricants/suppr/<?= $fabricant['ID_FABRICANT'] ?>"><button class='btn btn-danger btn-sm fas fa-trash-alt fa-sm'></button></a>
            </td>
        </tr>

    <?php endforeach ?>

</table>