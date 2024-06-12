<?php

$allText = getTextByUserLang($db, $_SESSION["cp_lang"]);
// $completeTexts = getAllTexts($db);


if(isset($_GET["logout"])) {
    require("../model/logoutModel.php");
    die();
}

if (isset($_POST["selectInp"],
          $_POST["englishInp"],
          $_POST["frenchInp"],
          $_POST["typeInp"]))
           {
            $selector = standardClean($_POST["selectInp"]);
            $eng      = simpleTrim($_POST["englishInp"]);
            $fre      = simpleTrim($_POST["frenchInp"]);
            $type     = standardClean($_POST["typeInp"]);

            $addText = addNewText($db, $selector, $eng, $fre, $type);
            if (is_string($addText)) {
                $errorMessage = $addText;
            }
           }





$title = 'Hi Boss';
include("../view/private/privateHomeView.php");
die();