<?php
if (isset($_GET["id"]) && ctype_digit($_GET["id"])) {
  $id = simpleTrim($_GET["id"]);

  $visitorName = getVisitorName($db, $id);
  if ($visitorName['cp_visitor_lang'] === 'fr') {
    $_SESSION["cp_lang"] = 'fr';
  }
}

if (isset($_POST["user_lang"])) {
  $_SESSION["cp_lang"] = $_POST["user_lang"];
}


$allText = getTextByUserLang($db, $_SESSION["cp_lang"]);

if (isset($_POST["nameInp"], $_POST["passInp"])) {
        $name = standardClean($_POST["nameInp"]);
        $pwd  = simpleTrim($_POST["passInp"]);
    
        $attemptLogin = userLogin($db, $name, $pwd);

        if ($attemptLogin === true) {
 
          header("Location: ./");
            die();
        }else {
          $errorMessage = "incorrect login details";
            $title = "Incorrect Login";
            include "../view/publicHomeView.php";
            die();
        }
}


$title = "Welcome";
include("../view/publicHomeView.php");
die();