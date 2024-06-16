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
    <div class="container-fluid d-flex flex-column align-items-center"> <!-- CONTAINER GLOBAL POUR ENGLOBÉ LE TOTALE -->

<?php include ("inc/header.php"); ?>
<?php include ("inc/error-message.php"); // leave this here to display any eventual error message - include this on all pages ?>
    
    <div class="container">
        <?php if (isset($_GET["login"])) include("inc/loginForm.php"); ?>

            <form action="./" method="POST" class="d-flex flex-column align-items-center">
            <input type="text" class="text-center d-none" name="contactID" id="contactID" placeholder="<?php if (isset($visitorName)) echo $visitorName["cp_visitor_id"]?>" value="<?php if (isset($visitorName)) echo $visitorName["cp_visitor_id"]?>" required>
                    <label for="contactName" id="contactNameLabel"></label>
                        <input type="text" class="text-center" name="contactName" id="contactName" placeholder="<?php if (isset($visitorName)) echo $visitorName["cp_visitor_name"]?>" value="<?php if (isset($visitorName)) echo $visitorName["cp_visitor_name"]?>" required>
                    <label for="contactMail" id="contactMailLabel"></label>
                        <input type="email" class="text-center w-25" name="contactMail" id="contactMail" placeholder="<?php if (isset($visitorName)) echo $visitorName["cp_visitor_email"]?>" value="<?php if (isset($visitorName)) echo $visitorName["cp_visitor_email"]?>" required>
                    <label for="contactMess" id="contactMessLabel"></label>
                        <textarea name="contactMess" id="contactMess" class="w-50" required></textarea>
                
                <button class="btn btn-light btn-outline-success submitButton mt-3"></button>
            </form>
<?php // var_dump($visitorName); ?>
        
        
        
    </div>
    <?php include("inc/footer.php"); ?>
    </div>
    <!-- BOOTSTRAP CDN[SCRIPTS] ICI -->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!-- ET PUIS STYLE PERSO -->
    <script src="scripts/script.js"></script>
</body>
</html>