<?php

if(isset($_GET["logout"])) {
    require("../model/logoutModel.php");
    die();
}

include("../view/private/privateHomeView.php");
die();