<header class="m-5" id="headerNormal">
    <p class="h1 text-center" id="homepage_h1"></p>

<nav class="navbar border border-2 border-secondary">
    <div class="container-fluid">
        
        <div class="collapse-sm navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-column justify-content-evenly align-items-end">
                <?php if(!isset($_SESSION["id"])) {
                    ?>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="?login" id="navLogin"></a>
        </li>
    <?php
        }
        ?>
      </ul>
    
    <form method="POST" class="d-flex flex-row">
        <button class="btn langButton langEN" id="englishButton" value="en" type="submit" name="user_lang"></button>
        <button class="btn langButton langFR" id="frenchButton" value="fr" type="submit" name="user_lang"></button>
</form>

</div>
</div>
</nav>
<div class="container-fluid d-flex flex-row justify-content-center align-items-center">
<p class="h2" id="welcomeVisitor"></p>
<?php
    if (isset($visitorName)) {

?>
<p class="h2" id="welcomeName">, <?=$visitorName["cp_visitor_name"]?></p>
<?php
    }else {
?>
<p class="h2"> , Visitor<a href="?login" class="hiddenLink">.</a></p>
<?php
}
?>
</div>
</header>
