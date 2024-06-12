<?php

if (isset($_POST["nameInp"], $_POST["passInp"])) {
        $name = standardClean($_POST["nameInp"]);
        $pwd  = simpleTrim($_POST["passInp"]);
    
        $attemptLogin = userLogin($db, $name, $pwd);

        if ($attemptLogin === true) {
 
          header("Location: ./");
            die();
        }else {
            $title = "Incorrect Login";
            include "../view/publicHomeView.php";
            die();
        }
}



// IF TEXT POSTS INPUTS THEN ADD TO DB 
// ALSO ADD THE GET TEXT MODEL
// FIX THE TITLES

$title = "Welcome";
include("../view/publicHomeView.php");
die();