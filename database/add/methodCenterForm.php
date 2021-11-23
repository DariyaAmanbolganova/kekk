<?php
require '../connection.php';

if (isset($_POST['submit'])) {
    $glavnoe = $_POST['glavnoe'];
    $glavnoe_kz = $_POST['glavnoe_kz'];
    $glavnoe_en = $_POST['glavnoe_en'];
    $location = "C:/xampp/htdocs/kekk/database/add/upload/";
    $file1 = $_FILES['img1']['name'];
    $file_temp1 = $_FILES['img1']['tmp_name'];
    $person_image = [$file1];
    $dolzhnost = $_POST['dolzhnost'];
    $dolzhnost_kz = $_POST['dolzhnost_kz'];
    $dolzhnost_en = $_POST['dolzhnost_en'];
    $fio = $_POST['fio'];
    $fio_kz = $_POST['fio_kz'];
    $fio_en = $_POST['fio_en'];
    $stazh = $_POST['stazh'];
    $stazh_kz = $_POST['stazh_kz'];
    $stazh_en = $_POST['stazh_en'];
    $obrazovanie = $_POST['obrazovanie'];
    $obrazovanie_kz = $_POST['obrazovanie_kz'];
    $obrazovanie_en = $_POST['obrazovanie_en'];
    $discipliny = $_POST['discipliny'];
    $discipliny_kz = $_POST['discipliny_kz'];
    $discipliny_en = $_POST['discipliny_en'];
    $category = $_POST['category'];
    $category_kz = $_POST['category_kz'];
    $category_en = $_POST['category_en'];
    $qualification_course = $_POST['qualification_course'];
    $qualification_course_kz = $_POST['qualification_course_kz'];
    $qualification_course_en = $_POST['qualification_course_en'];

    $query = "INSERT INTO metodicheski_center(
                        glavnoe, glavnoe_kz, glavnoe_en, person_image,
                        dolzhnost, dolzhnost_kz, dolzhnost_en, 
                        fio, fio_kz, fio_en,
                        stazh, stazh_kz, stazh_en,
                        obrazovanie, obrazovanie_kz, obrazovanie_en,
                        discipliny, discipliny_kz, discipliny_en,
                        category, category_kz, category_en,
                        qualification_course, qualification_course_kz, qualification_course_en,) 
              VALUES (
                '$glavnoe', '$glavnoe_kz', '$glavnoe_en', '$person_image',
                '$dolzhnost', '$dolzhnost_kz', '$dolzhnost_en',
                '$fio', '$fio_kz', '$fio_en',
                '$stazh', '$stazh_kz', '$stazh_en',
                '$fio', '$fio_kz', '$fio_en',
                '$stazh', '$stazh_kz', '$stazh_en',
                '$obrazovanie', '$obrazovanie_kz', '$obrazovanie_en',
                '$discipliny', '$discipliny_kz', '$discipliny_en',
                '$category', '$category_kz', '$category_en',
                '$qualification_course','$qualification_course_kz','$qualification_course_en')";
    $fire = mysqli_query($conn, $query);
    if ($fire) {
        move_uploaded_file($file_temp1, $location.$file1);
        echo "Новость успешно добавлена!";
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
                    Добавить
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Название kz: </label><input type="text" name="glavnoe_kz" class="form-control" required><br>
                            <label>Название rus: </label><input type="text" name="glavnoe" class="form-control" required><br>
                            <label>Название english: </label><input type="text" name="glavnoe_en" class="form-control" required><br>
                        </div>
                        <div class="form-group">
                            <label>Фотография:</label>
                            <input type="file" name="img1" class="form-control" required><br>
                        </div>
                        <div class="form-group">
                            <label>ФИО kz: </label><input type="text" name="fio_kz" class="form-control" required><br>
                            <label>ФИО rus: </label><input type="text" name="fio" class="form-control" required><br>
                            <label>ФИО english: </label><input type="text" name="fio_en" class="form-control" required><br>
                            <label>Стаж работы kz: </label><input type="text" name="stazh_kz" class="form-control" required><br>
                            <label>Стаж работы rus: </label><input type="text" name="stazh" class="form-control" required><br>
                            <label>Стаж работы english: </label><input type="text" name="stazh_en" class="form-control" required><br>
                        </div>
                        <div class="form-group">
                            <label>Образование kz: </label><input type="text" name="obrazovanie_kz" class="form-control" required><br>
                            <label>Образование rus: </label><input type="text" name="obrazovanie" class="form-control" required><br>
                            <label>Образование english: </label><input type="text" name="obrazovanie_en" class="form-control" required><br>
                            <label>Должность kz: </label><input type="text" name="dolzhnost_kz" class="form-control" required><br>
                            <label>Должность rus: </label><input type="text" name="dolzhnost" class="form-control" required><br>
                            <label>Должность english: </label><input type="text" name="dolzhnost_en" class="form-control" required><br>
                            <label>Преподоваемые дисциплины kz: </label><input type="text" name="discipliny_kz" class="form-control" required><br>
                            <label>Преподоваемые дисциплины rus: </label><input type="text" name="discipliny" class="form-control" required><br>
                            <label>Преподоваемые дисциплины english: </label><input type="text" name="discipliny_en" class="form-control" required><br>
                        </div>
                        <div class="form-group">
                            <label>Категория kz: </label><input type="text" name="category_kz" class="form-control" required><br>
                            <label>Категория rus: </label><input type="text" name="category" class="form-control" required><br>
                            <label>Категория english: </label><input type="text" name="categoryt_en" class="form-control" required><br>
                            <label>Курсы повышения квалификации kz: </label><textarea class="form-control" type="text" rows="10" cols="40" name="qualification_course_kz" required></textarea><br>
                            <label>Курсы повышения квалификации rus: </label><textarea class="form-control" type="text" rows="10" cols="40" name="qualification_course" required></textarea><br>
                            <label>Курсы повышения квалификации english: </label><textarea class="form-control" type="text" rows="10" cols="40" name="qualification_course_en" required></textarea><br>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Добавить">
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
