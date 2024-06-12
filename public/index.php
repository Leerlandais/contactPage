<?php

session_start(); 
if(!isset($_SESSION["user_lang"])) $_SESSION["user_lang"] = "en";   

require_once("../config.php");
require_once("../control/dbConnectControl.php");
require_once('../model/laundryModel.php');
require_once("../model/loginModel.php");
require_once('../model/textModel.php');
// require_once("../model/logoutModel.php");



if (isset($_SESSION["id"]) && $_SESSION["id"] === session_id()) {

    require_once ("../control/privateControl.php");
die();
}else {
    require_once("../control/publicControl.php");
}

$db = null;