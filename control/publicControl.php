<?php
if (isset($_GET["id"]) && ctype_digit($_GET["id"])) {
  $id = simpleTrim($_GET["id"]);

  if(!$_SESSION["count"]) {
     $updateVisit = updateVisitorCountByID($db, $id);
  }
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

if (isset($_POST["contactID"],
          $_POST["contactName"],
          $_POST["contactMail"],
          $_POST["contactMess"])
          && ctype_digit($_POST["contactID"])
    ){
        $id   = intval(intClean($_POST["contactID"]));
        $name = standardClean($_POST["contactName"]);
        $mail = standardClean($_POST["contactMail"]);
        $mess = standardClean($_POST["contactMess"]);

        $sendMess = sendVisitorMessage($db, $id, $name, $mail, $mess);
        if (is_string($sendMess)) {
          $errorMessage = $sendMess;
        }else if (!$sendMess) {
          $errorMessage = "Something went wrong";
        }else {
          if ($_SESSION["cp_lang"] === "en") $errorMessage = "Your message has been delivered";
          if ($_SESSION["cp_lang"] === "fr") $errorMessage = "Votre message a été livré";
        }
    }

$title = "Welcome";
include("../view/publicHomeView.php");
die();