<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?php echo @$Titre; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="./style.css" rel="stylesheet">
    <style>
        <?php
        echo @$css;
        ?>
    </style>
</head>

<body>

    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-sm bg-light">
                <!-- Brand -->
                <a class="navbar-brand" href="<?= PATH ?>/">Accueil</a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/continents">Gestion des Continents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/lespays">Gestion des Pays</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/couleurs">Gestion des Couleurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/fabricants">Gestion des Fabricants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PATH ?>/marques">Gestion des Marques</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <header>
                <?php
                // Y a t il un message d'alert à afficher
                if (isset($message)) {
                    if (!isset($type_message)) {
                        $type_message = "info";
                    }
                    echo "<div class='alert alert-$type_message alert-dismissible'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                    $message
                </div>";
                }
                ?>
                <?= $content ?>

                <footer>
                    <h2 class="footer">Brice-Carole @2024 AFPA</h2>
                </footer>
                <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </div>

</body>

</html>