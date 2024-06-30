<header class="m-5" id="headerNormal">
    <h1 class="text-5xl text-center" id="homepage_h1"></h1>
    <form method="POST" action="" class="mt-5">
        <div class="container-fluid flex-row content-center justify-center mt-3 mb-5">
            <button class="langButton langEN" id="englishButton" value="en" type="submit" name="user_lang"></button>
            <button class="langButton langFR" id="frenchButton" value="fr" type="submit" name="user_lang"></button>
        </div>
    </form>

    <div class="container-fluid d-flex flex-column align-items-center mb-5">
        <h2 class="text-4xl" id="welcomeVisitor"></h2>
        <?php
        if (isset($visitorName) && $visitorName != "") {

            ?>
            <div class="d-flex flex-row">
                <h2 class="text-4xl" id="welcomeName"><?= $visitorName["cp_visitor_name"] ?><a href="?login"
                                                                                               class="hiddenLink">.</a>
                </h2>
            </div>
            <h4 class="text-2xl" id="welcomeMess"></h4>
            <?php
        } else {
            ?>
            <p class="h2"> , Visitor<a href="?login" class="hiddenLink">.</a></p>
            <?php
        }
        ?>
    </div>
</header>
