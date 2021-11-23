<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['uchebnyCentr']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">

</head>
<html>
<body>
<?php require 'includes/header.php';?>
<h1 style="margin-top: 135px; font-size: 23px; text-align: center; font-weight: bold; padding-bottom: 15px">
    <?php echo $lang['uchebnyCentr']?>
</h1>

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" >
        <div class="row justify-content-between">
            <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                <img src="images/petrash-veronika.jpg" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <h3 data-aos="fade-up">Петраш Вероника Ивановна</h3>
                <p data-aos="fade-up" data-aos-delay="100">
                    <strong>Руководитель учебного центра</strong><br><br>
                    Стаж работы: 1 год<br>
                    Тел.: +7702 25 25 806<br>
                    Е-mail: kaz_vero@mail.ru
                </p>
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Образование</h4>
                        <p>Костанайский экономический колледж Казпотребсоюза</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Специальность</h4>
                        <p>«Оценка»</p>
                    </div>
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Калификация</h4>
                        <p>«Техник-оценщик
                            Костанайский государственный университет им.А.Байтурсынова</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Специальность</h4>
                        <p>«Экономика»</p>
                    </div>
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Калификация</h4>
                        <p>бакалавр экономики и бизнеса
                            Костанайский государственный университет им.А.Байтурсынова</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Специальность</h4>
                        <p>«Юриспруденция»</p>
                    </div>
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Калификация</h4>
                        <p>магистр права</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Публикации</h4>
                        <p>Международный научный журнал» Ғылым Наука (Костанайская Академия МВД Республики Казахстан имени Шракбека Кабылбаева), тема: "Исторический аспект учения о хулиганстве"</p>
                    </div>
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Курсы</h4>
                        <p><ol type="1">
                            <li>Дистанционное обучение в организациях ТиПО</li>
                            <li>Организация самостоятельной работы студентов в условиях дистанционного обучения</li>
                            <li>Развитие и совершенствование IT-компетенций педагогов</li>
                        </ol></p>
                    </div>
                </div>
            </div>
            <?php }

            if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <h3 data-aos="fade-up">Петраш Вероника Ивановна</h3>
                <p data-aos="fade-up" data-aos-delay="100">
                    <strong>Оқу орталығының жетекшісі</strong><br><br>
                    Жұмыс өтілі: 1 жыл<br>
                    Тел .: +7 702 25 25 806<br>
                    Электрондық пошта: kaz_vero@mail.ru
                </p>
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Білімі:</h4>
                        <p>Қазтұтынуодағының Қостанай экономикалық колледжі</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Мамандығы:</h4>
                        <p>«Бағалау»</p>
                    </div>
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Біліктілігі:</h4>
                        <p>Бағалаушы техник А.Байтұрсынов атындағы Қостанай мемлекеттік университеті</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Мамандығы:</h4>
                        <p>«Экономика»</p>
                    </div>
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Біліктілігі:</h4>
                        <p>Экономика және бизнес бакалавры
                            А.Байтұрсынов атындағы Қостанай мемлекеттік университеті</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Мамандығы:</h4>
                        <p>«Құқықтану»</p>
                    </div>
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Біліктілігі:</h4>
                        <p>Құқық магистрі</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Жарияланымдар:</h4>
                        <p>Халықаралық ғылыми журнал «Ғылым Наука (Қазақстан Республикасы ІІМ Шырақбек Қабылбаев атындағы Қостанай академиясы), тақырыбы:»Бұзақылық туралы ілімнің тарихи қыры»</p>
                    </div>
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Курсы</h4>
                        <p><ol type="1">
                            <li>ТжКББ ұйымдарында қашықтықтан оқыту</li>
                            <li>Қашықтықтан оқыту жағдайында студенттердің өзіндік жұмысын ұйымдастыру</li>
                            <li>Педагогтердің IT-құзыреттерін дамыту және жетілдіру</li>
                        </ol></p>
                    </div>
                </div>
            </div>
            <?php }

            if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <h3 data-aos="fade-up">Петраш Вероника Ивановна</h3>
                <p data-aos="fade-up" data-aos-delay="100">
                    <strong>Руководитель учебного центра</strong><br><br>
                    Стаж работы: 1 год<br>
                    Тел.: +7702 25 25 806<br>
                    Е-mail: kaz_vero@mail.ru
                </p>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Образование</h4>
                        <p>Костанайский экономический колледж Казпотребсоюза<br>
                            Специальность: «Оценка»</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Калификация</h4>
                        <p>«Техник-оценщик
                            Костанайский государственный университет им.А.Байтурсынова</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Специальность</h4>
                        <p>«Экономика»</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Калификация</h4>
                        <p>бакалавр экономики и бизнеса
                            Костанайский государственный университет им.А.Байтурсынова</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Специальность</h4>
                        <p>«Юриспруденция»</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Калификация</h4>
                        <p>магистр права</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Публикации</h4>
                        <p>Международный научный журнал» Ғылым Наука (Костанайская Академия МВД Республики Казахстан имени Шракбека Кабылбаева), тема: "Исторический аспект учения о хулиганстве"</p>
                    </div>
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Курсы</h4>
                        <p><ol type="1">
                            <li>Дистанционное обучение в организациях ТиПО</li>
                            <li>Организация самостоятельной работы студентов в условиях дистанционного обучения</li>
                            <li>Развитие и совершенствование IT-компетенций педагогов</li>
                        </ol></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <hr style="background-color: #eb5d1e; margin-top: 25px; margin-bottom: 25px; height: 5px">
    </div>
</section><!-- End About Section -->


<!-- ======= Team Section ======= -->
<section id="team" class="team" style="padding-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="one">
                    <h5 style="line-height: 25px"><?php
                        echo nl2br($lang['uchebnyCentrContent']);?></h5>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 buttonsBlue" data-aos="zoom-in" data-aos-delay="100">
                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                    <a href="pdf/Polozhenie-Uchebnogo-centra.pdf" target="_blank" class="btn btn-primary" role="button"><?php echo $lang['polozhenieObUchebnomCentre'] ?></a>
                    <?php }

                    if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                    <a href="pdf/KAZ.-POLOZH.-Uchebnogo-centra-kopiya.pdf" target="_blank" class="btn btn-primary" role="button"><?php echo $lang['polozhenieObUchebnomCentre']?></a>
                    <?php }

                    if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                    <a href="pdf/Polozhenie-Uchebnogo-centra.pdf" target="_blank" class="btn btn-primary" role="button"><?php echo $lang['polozhenieObUchebnomCentre']?></a>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Team Section -->


<?php require 'includes/footer.php'; ?>

</body>
</html>