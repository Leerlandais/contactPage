<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CDN[STYLE] ICI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- ET PUIS STYLE PERSO -->
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
    <div class="container"> <!-- CONTAINER GLOBAL POUR ENGLOBÉ LE TOTALE -->
    <?php
        // INCLURE SI NECESSAIRE (BON ENDROIT POUR LE NAVBAR PAR EXEMPLE)
        include("inc/header.php");
        var_dump($allText);
        var_dump($_SESSION);
    ?>

<?php include ("inc/error-message.php"); // leave this here to display any eventual error message - include this on all pages ?>
    
    <div class="container">
        <p class="h4"><a href="?login" id="publicPageLogin"></a></p>
    <?php
        if (isset($_GET["login"])) include("inc/loginForm.php");
    ?>

    <p class="h5" id="testH"></p>
    </div>

    <?php
        // INCLURE SI NECESSAIRE
        include("inc/footer.php");
    ?>
    </div>
    <!-- BOOTSTRAP CDN[SCRIPTS] ICI -->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!-- ET PUIS STYLE PERSO -->
    <script src="scripts/script.js"></script>
</body>
</html>