<?php
require '../connection.php';
require '../get/getNewsPodrobno.php';

$news = getNewsContent($conn, $_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $sql = "DELETE FROM news
    WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        echo mysqli_error($conn);
    }else{
        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../../index.php ");
            exit;

        }else{
            echo mysqli_stmt_error($stmt);
        }
    }
}
?>
