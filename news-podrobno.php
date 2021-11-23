<?php
    require 'database/connection.php';
    require 'database/get/getNewsPodrobno.php';

    $newsContent = getNewsContent($conn, $_GET['id']);
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Приемная комиссия КВКК начала свою работу</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<html>
<body>
<?php require 'includes/header.php';?>
<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="section-title" data-aos="fade-up">
                    <p><?=$newsContent['name']?></p>
                </div>
                <div class="news-image" data-aos="fade-up">
                    <?php
                    $images = $newsContent['images'];
                    $imagesSeparated = explode(" ", $images);
                    echo "<img src='database/add/upload/$imagesSeparated[0]'>";
                    ?>
                </div>
                <div class="news-content">
                    <div class="news-content-date">
                        <i class="bi bi-newspaper"></i>
                        <h5><strong>Опубликовано: </strong><?=$newsContent['date']?></h5>
                    </div>

                    <p><?=$newsContent['content']?></p>
                </div>
                <div class="col-xl-6">
                    <div class="news-extra-img">
                    <?php
                        echo "<img src='database/add/upload/$imagesSeparated[1]'>";
                        echo "<img src='database/add/upload/$imagesSeparated[2]'>";
                    ?>
                    </div>
                </div>
                <?php
                    if (isset($_SESSION['user'])) {
                        if ($_SESSION['user']['username'] == 'admin') {
                            echo "<a href='database/edit/editNewsPodrobno.php?id=" . $newsContent['id'] . "'>Редактировать Новость</a><br><br><br>
                                  <form action='database/delete/deleteNews.php?id=" . $newsContent['id'] . "' method='post'>
                                    <button>УДАЛИТЬ НОВОСТЬ</button>
                                  </form>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->


<?php require 'includes/footer.php'; ?>

</body>
</html>