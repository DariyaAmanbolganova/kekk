<?php
require 'database/connection.php';
include 'languages/lang.php';
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="js/script.js"></script>
    <style>
        .member-info-content a {
            text-decoration: none;
        }
    </style>

</head>
<html>
<body>

<?php require 'includes/header.php'; ?>

<!-- ======= Приветствие ======= -->
<section id="welcome">
    <div class="container">
        <div class="col-sm-12">
            <div class="alignfull">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                <h3>
                    <?php echo "" . $_SESSION['user']['username'];
                    } ?>
                </h3>
                <h3><?php echo $lang['dobroPozhalovatV'] ?></h3>
                <h1><?php echo $lang['collegeName'] ?></h1>
            </div>

        </div>
    </div>

</section>
<!-- ======= Новости ======= -->
<?php
$sql = "SELECT * FROM news";
$res = mysqli_query($conn, $sql);
if ($res === false) {
    echo mysqli_error($conn);
}else{
    $newsAll = mysqli_fetch_all($res, MYSQLI_ASSOC);
}
?>
<section class="body">
    <div class="slider">
        <?php
        if (isset($_SESSION['user'])){
            if ($_SESSION['user']['username']=='admin'){
                echo "<a href='database/add/addNews.php' id='addNewsButton'>Добавить Новость</a>";
            }
        }
        ?>
        <div class="slider-wrapper flex">
            <?php foreach ($newsAll as $newsOne): ?>
                <div class="slide flex">
                    <div class="slide-image slider-link prev">
                        <?php
                        $imagesAll = $newsOne['images'];
                        $imagesSeparated = explode(" ", $imagesAll);
                        echo "<img src='database/add/upload/$imagesSeparated[0]'>";
                        ?>
                        <div class="overlay">
                        </div>
                    </div>
                    <div class="slide-content">
                        <div class="slide-date"><?php echo $newsOne['date']; ?></div>
                        <div class="slide-title"><?php echo $newsOne['name']; ?></div>
                        <div class="slide-more"><a href="news-podrobno.php?id=<?=$newsOne['id'];?>" style="text-decoration: none"><?php echo $lang['podrobnee']?></a></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="arrows">
            <a href="#" title="Previous" class="arrow slider-link prev"></a>
            <a href="#" title="Next" class="arrow slider-link next"></a>
        </div>
    </div>
</section>

<!-- ======= Team Section ======= -->
<section id="team" class="team" style="text-align: center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 youtubeVideo" data-aos="zoom-in" data-aos-delay="100">
                <iframe src="https://www.youtube.com/embed/qYAw_lacTdI" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="mission">
                    <img src="https://cdn23.img.ria.ru/images/07e4/0b/1a/1586410812_0:93:3067:1818_1920x0_80_0_0_2ce0c839726e4cacefaaa3ddf7c19288.jpg">
                    <div class="centered">
                        <h2><?php echo $lang['missiya'] ?></h2>
                        <hr>
                        <p><?php echo $lang['missiyaDescription'] ?></p>
                    </div>
                </div>
            </div>

            <div class="section-title" data-aos="fade-up" style="margin-top: 35px">
                <p><?php echo $lang['otdeleniyaKolledja'] ?></p>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="member"
                     style="background-image: url('images/отделения/uchet.png'); background-size: 50% 50%; background-repeat: no-repeat; background-position:center 90%;">
                    <div>
                        <h4><?php echo $lang['uchetFinansy'] ?></h4>
                    </div>
                    <div class="member-info">
                        <div class="member-info-content">
                            <a href="o-specialnosti-uchet-audit.php">
                                <button type="button"
                                        class="btn btn-outline-warning"><?php echo $lang['podrobnee'] ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member"
                     style="background-image: url('images/отделения/pravo.png'); background-size: 50% 50%; background-repeat: no-repeat; background-position:center 90%;">
                    <div>
                        <h4><?php echo $lang['socialPravo'] ?></h4>
                    </div>
                    <div class="member-info">
                        <div class="member-info-content">
                            <a href="o-specialnostyakh-pravovedenie.php">
                                <button type="button"
                                        class="btn btn-outline-warning"><?php echo $lang['podrobnee'] ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member"
                     style="background-image: url('images/отделения/marketing.png'); background-size: 50% 50%; background-repeat: no-repeat; background-position:center 90%;">
                    <div>
                        <h4><?php echo $lang['technologicheski'] ?></h4>
                    </div>
                    <div class="member-info">
                        <div class="member-info-content">
                            <a href="o-specialnosti-technologicheskikh.php">
                                <button type="button"
                                        class="btn btn-outline-warning"><?php echo $lang['podrobnee'] ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member"
                     style="background-image: url('images/отделения/correspondence.png'); background-size: 50% 50%; background-repeat: no-repeat; background-position:center 90%;">
                    <div>
                        <h4><?php echo $lang['zaochnoe'] ?></h4>
                    </div>
                    <div class="member-info">
                        <div class="member-info-content">
                            <a href="o-specialnosti-zaochnoe.php">
                                <button type="button"
                                        class="btn btn-outline-warning"><?php echo $lang['podrobnee'] ?></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title" data-aos="fade-up" style="margin-top: 35px">
                <p></p>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="containerMenu">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="gosZakaz.php">
                                <img src="images/logo/gos-zakaz.png">
                                <h5><?php echo $lang['gosObrazovatelniZakaz'] ?></h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="virtualPriemKomissiya.php">
                                <img src="images/logo/apply.png">
                                <h5><?php echo $lang['virtualPriemKomissiya'] ?></h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="startup.php">
                                <img src="images/logo/startup.png">
                                <h5><?php echo $lang['startup-proekty'] ?></h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="methodCenter.php">
                                <img src="images/logo/method-centr.png">
                                <h5><?php echo $lang['metodCentr'] ?></h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="bibliotechno-infoCentr.php">
                                <img src="images/logo/biblioteka.png">
                                <h5><?php echo $lang['bibliotechno-infoCentr'] ?></h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="uchebnyCentr.php">
                                <img src="images/logo/uchebni-centr.png">
                                <h5><?php echo $lang['uchebnyCentr'] ?></h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="social-psychoSluzhba.php">
                                <img src="images/logo/social-sluzhba.jpg">
                                <h5><?php echo $lang['social-psychoSluzhba'] ?></h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="gosUslugi.php">
                                <img src="images/logo/gos-uslugi.png">
                                <h5><?php echo $lang['gosUslugi'] ?></h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="perechenUslygKolleg.php">
                                <img src="images/logo/uslugi-koleja.png">
                                <h5><?php echo $lang['perechenUslygKolleg'] ?></h5>
                            </a>
                        </div>

                        <!--Достижения преподавателей:-->

                            <div class="col-12 col-md-6 col-xl-3">
                                <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus") { ?>
                                    href="pdf/dostizheniya-pedagogov-rus.pdf"
                                    <?php } ?>
                                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "en") { ?>
                                    href="pdf/dostizheniya-pedagogov-rus.pdf"
                                    <?php } ?>
                                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "kz") { ?>
                                    href="pdf/dostizheniya-pedagogov-kz.pdf"
                                    <?php } ?> >
                                    <img src="images/logo/dostizheniya-prepodovatelei.png">
                                    <h5><?php echo $lang['dostizheniyaPrepodovatel'] ?></h5>
                                </a>
                            </div>


                        <!--Достижения студентов:-->
                            <div class="col-12 col-md-6 col-xl-3">
                                <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus") { ?>
                                    href="pdf/dostizheniya-studentov-rus.pdf"
                                    <?php } ?>
                                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "kz") { ?>
                                    href="pdf/dostizheniya-studentov-kz.pdf"
                                    <?php } ?>
                                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "en") { ?>
                                    href="pdf/dostizheniya-studentov-rus.pdf"
                                    <?php } ?> >
                                    <img src="images/logo/dostizheniya-studentov.png">
                                    <h5><?php echo $lang['dostizheniyaStudentov'] ?></h5>
                                </a>
                            </div>

                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="distancionnoeObuchenie.php">
                                <img src="images/logo/online.png">
                                <h5><?php echo $lang['distancionnoeObuchenie'] ?></h5>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3">
                            <a class="d-flex flex-column align-items-center justify-content-between p-3 block"
                               href="otzyvy.php">
                                <img src="images/logo/otzyvy.png">
                                <h5><?php echo $lang['otzyvy'] ?></h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->

<!-- ======= Banner ======= -->
<section id="clients" classs="clients section-bg" style="padding-top: 0">
    <div class="container-fluid" data-aos="zoom-in">
        <div class="row justify-content-center">
            <div class="section-title" data-aos="fade-up">
                <p></p>
            </div>
            <div class="carousel" data-flickity='{ "groupCells": true }'>
                <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus") { ?>
                    <div class="carousel-cell"><a href="blogDirectora.php"><img src="images/banner/ban-1.jpg"
                                                                                alt="Блог Директора"></a></div>
                    <div class="carousel-cell"><a href="accreditaciya.php"><img src="images/banner/accreditaciya.jpg"
                                                                                alt=""></a></div>
                    <div class="carousel-cell"><a href="pdf/licenziya/rus.pdf"><img
                                    src="images/banner/lic-nov-rus-1.png" alt=""></a></div>
                    <div class="carousel-cell"><a href=""><img src="images/banner/altyn-jastary.png" alt=""></a></div>
                    <div class="carousel-cell"><a href="https://www.youtube.com/watch?v=SOn1oeoY26c"
                                                  target="_blank"><img src="images/banner/interview-rus.gif" alt=""></a>
                    </div>
                    <div class="carousel-cell"><a href="https://www.youtube.com/watch?v=12NyvQW73aQ"
                                                  target="_blank"><img src="images/banner/cifrovizaciya.jpg" alt=""></a>
                    </div>
                    <div class="carousel-cell"><a href="soc-partnery.php"><img src="images/banner/soc-parnery-rus-1.png"
                                                                               alt=""></a></div>
                    <div class="carousel-cell"><a href="nashi-vypuskniki.php"><img src="images/banner/vypusk-rus-1.png"
                                                                                   alt=""></a></div>
                    <div class="carousel-cell"><a href="anons-meropriyatii.php"><img src="images/banner/anons-rus.png"
                                                                                     alt=""></a></div>
                    <div class="carousel-cell"><a href="distance-olimpiada.php"><img src="images/banner/olimp-rus.gif"
                                                                                     alt=""></a></div>
                    <div class="carousel-cell"><a href="vakansii.php"><img src="images/banner/vakansii.jpg" alt=""></a>
                    </div>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "kz") { ?>
                    <div class="carousel-cell"><a href="blogDirectora.php"><img src="images/banner/ban-1.jpg"
                                                                                alt="Блог Директора"></a></div>
                    <div class="carousel-cell"><a href="accreditaciya.php"><img
                                    src="images/banner/accreditaciya-kaz.jpg" alt=""></a></div>
                    <div class="carousel-cell"><a href="pdf/licenziya/kz.pdf"><img src="images/banner/lic-nov-kaz.png"
                                                                                   alt=""></a></div>
                    <div class="carousel-cell"><a href=""><img src="images/banner/altyn-jastary.png" alt=""></a></div>
                    <div class="carousel-cell"><a href="https://www.youtube.com/watch?v=SOn1oeoY26c"><img
                                    src="images/banner/interview-rus.gif" alt=""></a></div>
                    <div class="carousel-cell"><a href="https://www.youtube.com/watch?v=12NyvQW73aQ"><img
                                    src="images/banner/cifrovizaciya-kaz.jpg" alt=""></a></div>
                    <div class="carousel-cell"><a href="soc-partnery.php"><img src="images/banner/soc-partner-kaz.png"
                                                                               alt=""></a></div>
                    <div class="carousel-cell"><a href="nashi-vypuskniki.php"><img src="images/banner/vypusk-kaz.png"
                                                                                   alt=""></a></div>
                    <div class="carousel-cell"><a href="anons-meropriyatii.php"><img src="images/banner/anons-kaz.png"
                                                                                     alt=""></a></div>
                    <div class="carousel-cell"><a href="distance-olimpiada.php"><img src="images/banner/olimp-kaz.gif"
                                                                                     alt=""></a></div>
                    <div class="carousel-cell"><a href="vakansii.php"><img src="images/banner/vakansii-kaz.jpg" alt=""></a>
                    </div>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "en") { ?>
                    <div class="carousel-cell"><a href="blogDirectora.php"><img src="images/banner/ban-1-en.jpeg"
                                                                                alt="Principle's Blog"></a></div>
                    <div class="carousel-cell"><a href="accreditaciya.php"><img
                                    src="images/banner/accreditaciya-en.jpeg" alt=""></a></div>
                    <div class="carousel-cell"><a href="pdf/licenziya/rus.pdf"><img
                                    src="images/banner/lic-nov-rus-1.png" alt=""></a></div>
                    <div class="carousel-cell"><a href=""><img src="images/banner/altyn-jastary.png" alt=""></a></div>
                    <div class="carousel-cell"><a href="https://www.youtube.com/watch?v=SOn1oeoY26c"><img
                                    src="images/banner/interview-rus.gif" alt=""></a></div>
                    <div class="carousel-cell"><a href="https://www.youtube.com/watch?v=12NyvQW73aQ"><img
                                    src="images/banner/cifrovizaciya-en.jpeg" alt=""></a></div>
                    <div class="carousel-cell"><a href="soc-partnery.php"><img src="images/banner/soc-parnery-en.jpeg"
                                                                               alt=""></a></div>
                    <div class="carousel-cell"><a href="nashi-vypuskniki.php"><img src="images/banner/vypusk-en.jpeg"
                                                                                   alt=""></a></div>
                    <div class="carousel-cell"><a href="anons-meropriyatii.php"><img src="images/banner/anons-en.jpeg"
                                                                                     alt=""></a></div>
                    <div class="carousel-cell"><a href="distance-olimpiada.php"><img src="images/banner/olimp-en.jpeg"
                                                                                     alt=""></a></div>
                    <div class="carousel-cell"><a href="vakansii.php"><img src="images/banner/vakansii-en.jpeg" alt=""></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

<?php require 'includes/footer.php'; ?>

</body>
</html>