<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Gestion des Continents</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="./style.css" rel="stylesheet">
    <style>
        body {
            background: url('<?= PATH ?>/projet/banniere.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des Continents</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?= PATH ?>/continents/ajout" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter</a>
        </div>
        
        <?php if (isset($message)): ?>
            <div class="alert alert-<?= $type_message ?> alert-dismissible fade show" role="alert">
                <?= $message ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($continents as $continent): ?>
                    <tr>
                        <td><?= $continent['ID_CONTINENT'] ?></td>
                        <td><?= $continent['NOM_CONTINENT'] ?></td>
                        <td>
                            <a href="<?= PATH ?>/continents/modif/<?= $continent['ID_CONTINENT'] ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?= PATH ?>/continents/suppr/<?= $continent['ID_CONTINENT'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
