<?php

$allText       = getTextByUserLang($db, $_SESSION["cp_lang"]);
$completeTexts = getAllTexts($db);
$visitors      = getVisitorCount($db); // this function is only needed in one place. Is it better to call it here or call it on the page itself? In other words, if here, does it get called all the time or only when needed?
$getMessages   = getVisitorMessages($db);
if(isset($_GET["logout"])) {
    require("../model/logoutModel.php");
    die();
}
// ADD TEXT
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

// GET TEXT FOR UPDATE
if (isset($_GET["item"]) &&
          ctype_digit($_GET["item"])) {
    $id = intval(intClean($_GET["item"]));
$getOneText = getOneTextForUpdate($db, $id);
                }


// UPDATE ONE TEXT
if (isset($_POST["oneTextId"],
          $_POST["oneTextElem"],
          $_POST["oneTextEng"],
          $_POST["oneTextFre"],
          $_POST["selectorType"]
        ) &&
        ctype_digit($_POST["oneTextId"])) {
            $id     = intval(intClean($_POST["oneTextId"]));
            $elem   = standardClean($_POST["oneTextElem"]);
            $eng    = standardClean($_POST["oneTextEng"]);
            $fre    = standardClean($_POST["oneTextFre"]);
            $type   = standardClean($_POST["selectorType"]);

    $updateText = updateOneText($db, $id, $elem, $eng, $fre, $type);
    if (is_string($updateText)) {
        $errorMessage = $updateText;
    }else if ($updateText === true) {
 
        header("Location: ?updateText");
          die();
      }
        }


    // MERGE VISITOR COUNTS
    if (isset($_POST['visitorUpdate'])) {
        $mergeCount = mergeVisitorCounters($db);
        if (is_string($mergeCount)) {
            $errorMessage = $mergeCount;
        }else {
            header("Location: ?visitCheck");
        }
    }

    // GET SINGLE MESSAGE
    if (isset($_GET["showMessage"])
         && ctype_digit($_GET["showMessage"])
        ){
            $id = intval(intClean($_GET["showMessage"]));
            $getOneMess = getOneMessageByID($db, $id);
            
        }

// ADD NEW VISITOR
if (isset($_POST["newVisitCode"],
          $_POST["newVisitName"],
          $_POST["newVisitMail"],
          $_POST["newVisitLang"]
          ) && ctype_digit($_POST["newVisitCode"])
    ){
        $code = standardClean($_POST["newVisitCode"]);
        $name = standardClean($_POST["newVisitName"]);
        $mail = standardClean($_POST["newVisitMail"]);
        $lang = standardClean($_POST["newVisitLang"]);

        $newVisitor = addNewVisitor($db, $code, $name, $mail, $lang);
    }

$title = 'Hi Boss';
include("../view/private/privateHomeView.php");
die();