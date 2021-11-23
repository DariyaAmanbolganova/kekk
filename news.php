<?php
require 'database/connection.php';


$sql = "SELECT * FROM news";
$res = mysqli_query($conn, $sql);
if ($res === false) {
    echo mysqli_error($conn);
} else {
    $newsAll = mysqli_fetch_all($res, MYSQLI_ASSOC);
}


?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Новости</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">

</head>
<html>
<body>
<?php require 'includes/header.php';?>

<!-- ======= Новости ======= -->
<section id="events" class="events">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Новости колледжа</h2>
            <p></p>
        </div>

        <div class="events-slider" data-aos="fade-up" data-aos-delay="100">

            <!-- Start testimonial item -->
            <?php foreach ($newsAll as $newsOne): ?>
            <div class="swiper-slide">
                <div class="row event-item">
                    <div class="col-lg-6">
                        <?php
                        $imagesAll = $newsOne['images'];
                        $imagesSeparated = explode(" ", $imagesAll);
                        echo "<img src='database/add/upload/$imagesSeparated[0]' >";
                        ?>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3><?php echo $newsOne['name']; ?></h3>
                        <p>Опубликовано: <?php echo $newsOne['date']; ?></p>
                        <!--<p class="fst-italic">
                            <?php /*echo $newsOne['content']; */?>
                        </p>-->
                        <div class="buttonsOrange" data-aos="zoom-in" data-aos-delay="100">
                            <a href="news-podrobno.php?id=<?=$newsOne['id'];?>" class="btn btn-primary" role="button"><?php echo $lang['podrobnee']?></a>
                        </div>
                    </div>
                </div>
                <hr style="color: #ef7f4d; height: 5px">
                <?php endforeach; ?>
            </div><!-- End testimonial item -->

        </div>

    </div>
</section><!-- Новости -->

<?php require 'includes/footer.php'; ?>

</body>
</html>