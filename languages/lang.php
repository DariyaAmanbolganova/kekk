<?php
session_start();
if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = "rus";
}
else if (isset($_GET['language']) && $_SESSION['language'] != $_GET['language'] && !empty($_GET['language'])) {
    if ($_GET['language'] == "en") {
        $_SESSION['language'] = "en";
    }
    else if (($_GET['language'] == "rus")) {
        $_SESSION['language'] = "rus";
    }
    else if (($_GET['language'] == "kz")) {
        $_SESSION['language'] = "kz";
    }

    require_once "languages/".$_SESSION['language'].".php";

}
?>