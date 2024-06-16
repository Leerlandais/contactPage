<header class="m-5" id="headerNormal">
    <p class="h1 text-center" id="homepage_h1"></p>
    <form method="POST" class="mt-5">
    <div class="container-fluid d-flex flex-row d-lg-flex flex-row-reverse justify-content-center align-items-center mt-3 mb-5"> 
        <button class="btn langButton langEN" id="englishButton" value="en" type="submit" name="user_lang"></button>
        <button class="btn langButton langFR" id="frenchButton" value="fr" type="submit" name="user_lang"></button>
    </div>
</form>

<div class="container-fluid d-flex flex-row align-items-center mb-5">
<p class="h2" id="welcomeVisitor"></p>
<?php
    if (isset($visitorName)) {

?>
<p class="h2" id="welcomeName">, <?=$visitorName["cp_visitor_name"]?><a href="?login" class="hiddenLink">.</a></p>
<?php
    }else {
?>
<p class="h2"> , Visitor<a href="?login" class="hiddenLink">.</a></p>
<?php
}
?>
</div>
</header>
