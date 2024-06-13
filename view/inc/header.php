<header class="m-5" id="headerNormal">
<p class="h1 text-center" id="homepage_h1"></p>

<nav class="navbar">
<div class="container-fluid">

    <div class="collapse-sm navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row justify-content-evenly">
      <li class="nav-item">
        <a class="nav-link" href="?" id="navHome"></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="./" id="navContact"></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="?about" id="navAbout"></a>
        </li>

    <?php if(!isset($_SESSION["id"])) {
      ?>
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="?login" id="navLogin"></a>
        </li>
        <?php
        }
        ?>

<form method="POST" class="d-flex flex-row">
    <button class="btn langButton langEN" id="englishButton" value="en" type="submit" name="user_lang"></button>
    <button class="btn langButton langFR" id="frenchButton" value="fr" type="submit" name="user_lang"></button>
</form>
</div>
  </div>
</nav>
</header>
