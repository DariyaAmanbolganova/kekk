<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['sotrudnikiBiblioteki']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">

</head>
<html>
<body>
<?php require 'includes/header.php'; ?>


<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <p><?php echo $lang['sotrudnikiBiblioteki']?></p>
        </div>
        <div class="row justify-content-start">
            <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                <div class="col-lg-5 d-flex align-items-baseline justify-content-center about-img">
                    <img src="images/sotudnikiBiblioteki/elena-gen.jpg" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pat-5 pt-lg-0">
                    <h3 data-aos="fade-up">Браташова Елена Геннадьевна</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Заведующая библиотекой</strong><br><br>
                    </p>
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h5>E-mail:</h5>
                            <p>elena.brataschova@yandex.kz</p>
                        </div>
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Обрзование:</h4>
                            <p><ol type="1">
                                <li>Кустанайское культпросвет училище (1986 – 1988)</li>
                                <li>Центрально-Азиатский университет (2004 — 2007)</li></ol></p>
                        </div>
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Курсы повышения квалификации:</h4>
                            <p>«Академическом центре Start» по программе «Использование новых информационных технологий в практике работы библиотек образовательных учреждений» (2015).</p>
                        </div>
                    </div>
                </div>

                <hr style="background-color: #eb5d1e; margin-top: 25px; margin-bottom: 25px; height: 5px">

                <div class="col-lg-5 d-flex align-items-baseline justify-content-center about-img">
                    <img src="images/sotudnikiBiblioteki/salt-tan.jpg" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pat-5 pt-lg-0">
                    <h3 data-aos="fade-up">Нугуманова Салтанат Танаткановна</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Библиотекарь</strong><br><br>
                    </p>
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Обрзование:</h4>
                            <p>Челябинская государственная академия культуры и искусств (2013)</p>
                        </div>
                    </div>
                </div>

            <?php }
            if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                <div class="col-lg-5 d-flex align-items-baseline justify-content-center about-img">
                    <img src="images/sotudnikiBiblioteki/elena-gen.jpg" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">Браташова Елена Геннадьевна</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Кітапхана меңгерушісі</strong><br><br>
                    </p>
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>E-mail:</h4>
                            <p>elena.brataschova@yandex.kz</p>
                        </div>
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Білімі:</h4>
                            <p><ol type="1">
                                <li>Қостанай мәдени ағарту училищесі (1986 – 1988)</li>
                                <li>Орталық Азия университеті (2004 — 2007)</li>
                            </ol></p>
                        </div>
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Біліктілікті арттыру курстары:</h4>
                            <p>2015 жылы "Білім беру мекемелерінің кітапханаларында жұмыс тәжірибесіне жаңа ақпараттық технологияны енгізу» бағдарламасы бойынша “START.Академиялық орталығында” біліктілігін арттырды.</p>
                        </div>
                    </div>
                </div>

                <hr style="background-color: #eb5d1e; margin-top: 25px; margin-bottom: 25px; height: 5px">

                <div class="col-lg-5 d-flex align-items-baseline justify-content-center about-img">
                    <img src="images/sotudnikiBiblioteki/salt-tan.jpg" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">Нугуманова Салтанат Танаткановна</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Кітапханашы</strong><br><br>
                    </p>
                    <div class="row">
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Білімі:</h4>
                            <p>2013 жылы Челябі мемлекеттік мәдениет және өнер академиясын аяқтады</p>
                        </div>
                    </div>
                </div>
            <?php }
            if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){?>
                <div class="col-lg-5 d-flex align-items-baseline justify-content-center about-img">
                    <img src="images/sotudnikiBiblioteki/elena-gen.jpg" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">Elena Bratashova Gennadyevna</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Head of the library</strong><br><br>
                    </p>
                    <div class="row">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>E-mail:</h4>
                            <p>elena.brataschova@yandex.kz</p>
                        </div>
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Education:</h4>
                            <p><ol type="1">
                                <li>Kustanayskoe kultprosvet school (1986-1988)</li>
                                <li>Central Asian University (2004-2007)</li>
                            </ol></p>
                        </div>
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Qualification courses:</h4>
                            <p>Advanced training in the «Academic center Start » under the “program Use of new information technologies in the practice of libraries of educational institutions » (2015)</p>
                        </div>
                    </div>
                </div>

                <hr style="background-color: #eb5d1e; margin-top: 25px; margin-bottom: 25px; height: 5px">

                <div class="col-lg-5 d-flex align-items-baseline justify-content-center about-img">
                    <img src="images/sotudnikiBiblioteki/salt-tan.jpg" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">Nugumanova Saltanat Tanatkanovna</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Higher library education</strong><br><br>
                    </p>
                    <div class="row">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Education:</h4>
                            <p>Chelyabinsk state Academy of culture and arts, (2013)</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section><!-- End Team Section -->



<?php require 'includes/footer.php'; ?>

</body>
</html>