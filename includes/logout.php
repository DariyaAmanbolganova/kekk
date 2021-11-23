<?php
session_start();

/*if (isset($_SESSION['admin'])) {
    echo "admin";}*/
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
header("Location: ../index.php");
?>
