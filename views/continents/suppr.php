<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Suppression d'un Continent</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Suppression d'un Continent</h1>

        <form action="<?= PATH ?>/continents/suppr_sauve/<?= $continent['ID_CONTINENT'] ?>" method="POST">
            <div class="form-group mb-3">
                <label for="Id">Code Continent :</label>
                <input type="text" class="form-control" name="Id" id="Id" value="<?= $continent['ID_CONTINENT'] ?>" readonly>
            </div>
            <div class="form-group mb-3">
                <label for="Nom">Nom Continent:</label>
                <input type="text" class="form-control" name="Nom" id="Nom" value="<?= $continent['NOM_CONTINENT'] ?>" readonly>
            </div>
            <button type="submit" class="btn btn-danger">Supprimer</button>
            <a href="<?= PATH ?>/continents" class="btn btn-warning">Retour à la liste</button></a>
        </form>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
