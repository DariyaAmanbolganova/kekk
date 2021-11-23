<?php
require '../connection.php';
require '../get/getNewsPodrobno.php';

$methodCenter = getMethodCenter($conn, $_GET['id']);

?>

<h3 style="text-align: center">Радактировать</h3>

<?php

require '../add/methodCenterForm.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $images = $_POST['images'];
    $sql = "UPDATE news
    SET
    name = '$name',
    content = '$content',
    date = '$date',
    images = '$images'
    WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res === false) {
        echo mysqli_error($conn);
    }else{
        header("Location: ../../news-podrobno.php?id=$id");
        exit;
    }
}

?>
