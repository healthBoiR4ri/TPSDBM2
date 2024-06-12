<h1>Liste des Couleurs</h1>

<a href="<?= PATH ?>/couleurs/ajout"><button type='button' class='btn btn-primary fas fa-plus'>Ajouter</button></a><br />

<table class="table table-dark table-hover">
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($couleur as $couleur) : ?>

        <tr>
            <td><?= $couleur['ID_COULEUR'] ?></td>
            <td><?= $couleur['NOM_COULEUR'] ?></td>
            <td>
                <a href="<?= PATH ?>/couleurs/modif/<?= $couleur['ID_COULEUR'] ?>"><button class='btn btn-info btn-sm fas fa-pencil-alt fa-sm'></button></a>
                <a href="<?= PATH ?>/couleurs/suppr/<?= $couleur['ID_COULEUR'] ?>"><button class='btn btn-danger btn-sm fas fa-trash-alt fa-sm'></button></a>
            </td>
        </tr>

    <?php endforeach ?>

</table>