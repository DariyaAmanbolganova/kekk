<?php
require '../connection.php';
require '../get/getNewsPodrobno.php';

$news = getNewsContent($conn, $_GET['id']);

?>

<h3 style="text-align: center">Радактировать Новость</h3>

<?php

require '../add/newsForm.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET['id'];
//    $name = $_POST['name'];
//    $content = $_POST['content'];
//    $date = $_POST['date'];
//    $images = $_POST['images'];
//

    //


    $name = $_POST['name'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $location = "../add/upload/";
    $file1 = $_FILES['img1']['name'];
    $file_temp1 = $_FILES['img1']['tmp_name'];
    $file2 = $_FILES['img2']['name'];
    $file_temp2 = $_FILES['img2']['tmp_name'];
    $file3 = $_FILES['img3']['name'];
    $file_temp3 = $_FILES['img3']['tmp_name'];

    $data = [];
    $data = [$file1, $file2, $file3];

    $images = implode(' ', $data);
    $query = "UPDATE news
    SET
    name = '$name',
    content = '$content',
    date = '$date',
    images = '$images'
    WHERE id = '$id'";
    $fire = mysqli_query($conn, $query);
    if ($fire) {
        move_uploaded_file($file_temp1, $location.$file1);
        move_uploaded_file($file_temp2, $location.$file2);
        move_uploaded_file($file_temp3, $location.$file3);

        header("Location: ../../news-podrobno.php?id=$id");
        exit;
    } else {
        echo "Что-то пошло не так!";
    }
    //

//    $sql = "UPDATE news
//    SET
//    name = '$name',
//    content = '$content',
//    date = '$date',
//    images = '$images'
//    WHERE id = '$id'";
//    $res = mysqli_query($conn, $sql);
//    if ($res === false) {
//        echo mysqli_error($conn);
//    }else{
//        header("Location: ../../news-podrobno.php?id=$id");
//        exit;
//    }
}

?>
