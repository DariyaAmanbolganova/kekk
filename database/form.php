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
                    Отредактировать Новости
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