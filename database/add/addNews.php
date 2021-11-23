<?php
require '../connection.php';

if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $location = "upload/";
    $file1 = $_FILES['img1']['name'];
    $file_temp1 = $_FILES['img1']['tmp_name'];
    $file2 = $_FILES['img2']['name'];
    $file_temp2 = $_FILES['img2']['tmp_name'];
    $file3 = $_FILES['img3']['name'];
    $file_temp3 = $_FILES['img3']['tmp_name'];

    $data = [];
    $data = [$file1, $file2, $file3];

    $images = implode(' ', $data);
    $query = "INSERT INTO news(name, content, date, images) VALUES ('$name','$content','$date','$images')";
    $fire = mysqli_query($conn, $query);
    if ($fire) {
        move_uploaded_file($file_temp1, $location.$file1);
        move_uploaded_file($file_temp2, $location.$file2);
        move_uploaded_file($file_temp3, $location.$file3);
        echo "Новость успешно добавлена!";
        header("Location: http://localhost/kekk/index.php");
        exit;
    } else {
        echo "Что-то пошло не так!";
    }
}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<html>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header text-center bg-primary text-white text-uppercase">
                    Добавить Новости
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Название:</label><input type="text" name="name" class="form-control" required><br>
                            <label>Текст новости:</label><textarea class="form-control" type="text" rows="10" cols="40" name="content" required></textarea><br>
                            <label>Дата публикации:</label><input class="form-control" type="date" name="date" required><br><br>
                        </div>
                        <div class="form-group">
                            <label>Картинка 1:</label>
                            <input type="file" name="img1" class="form-control" required><br>
                        </div>
                        <div class="form-group">
                            <label>Картинка 2:</label>
                            <input type="file" name="img2" class="form-control" required><br>
                        </div>
                        <div class="form-group">
                            <label>Картинка 3:</label>
                            <input type="file" name="img3" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Добавить Новость">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
</body>
</html>

