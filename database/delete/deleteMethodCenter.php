<?php
require '../connection.php';
require '../get/getNewsPodrobno.php';

$method = getMethodCenter($conn, $_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'];
    $sql = "DELETE FROM metodicheski_center
    WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        echo mysqli_error($conn);
    }else{
        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../../methodCenter.php ");
            exit;

        }else{
            echo mysqli_stmt_error($stmt);
        }
    }
}
?>
