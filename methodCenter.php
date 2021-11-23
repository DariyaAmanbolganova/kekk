<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Методический центр</title>
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
            <p><?php echo $lang['metodCentr']?></p>
        </div>
        <div class="row justify-content-start">
            <div class="col-lg-5 d-flex align-items-baseline justify-content-center about-img">
                <img src="images/Uspanova-Z.N-300x200.jpg" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
            <div class="col-lg-6 pat-5 pt-lg-0">
                <h3 data-aos="fade-up">Успанова Зарина Наймановна</h3>
                <p data-aos="fade-up" data-aos-delay="100">
                    <strong>Руководитель Методического центра</strong><br><br>
                </p>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Стаж работы:</h4>
                        <p>9 лет</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Обрзование:</h4>
                        <p>Высшее юридическое, магистр юридических наук</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Должность:</h4>
                        <p>Преподаватель правовых дисциплин</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Преподаваемые дисциплины:</h4>
                        <p>Уголовное право, Уголовное процессуальное право</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Категория:</h4>
                        <p>Вторая</p>
                    </div>
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Курсы повышения квалификации:</h4>
                        <p>
                            <ol type="1">
                                <li>«Развитие профессиональной компетентности преподавателя в современных условиях», 2018 г.</li>
                                <li>Дистанционные курсы повышения квалификации «Развитие и совершенствование IT-компетенций педагогов» НАО Talap, 2020 г.</li>
                            </ol>
                        </p>
                        <h4>Публикации:</h4>
                        <p>
                            Статья «Новая образовательная система: исследования, теория и практика»<br><br>
                            VI Республиканская научно-практическая конференция,организованная Республиканским научно-методическим центром «Қабілет», на тему «Жеке адамға қарсы қылмыстық құқық бұзушылықтар» 2019 г.
                        </p>

                    </div>
                </div>
            </div>
            <?php }
            if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
            <div class="col-lg-6 pt-5 pt-lg-0">
                <h3 data-aos="fade-up">Успанова Зарина Найманқызы</h3>
                <p data-aos="fade-up" data-aos-delay="100">
                    <strong>Әдістемелік орталықтың басшысы</strong><br><br>
                </p>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Жұмыс өтілі:</h4>
                        <p>9 жыл</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Білімі:</h4>
                        <p>жоғары, магистр</p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Қызметі:</h4>
                        <p>Құқық піндерінің мұғалімі</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>Оқытатын пәндері:</h4>
                        <p>Қылмыстық құқық, Қылмыстық іс жүргізу құқығы,
                            Мемлекет және құқық теориясының негіздері,
                            Қаржы және салық құқығы негіздері,
                            Кәсіпкерлік және бизнес негіздері</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Санаты:</h4>
                        <p>Екінші</p>
                    </div>
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Біліктілікті арттыру курстары:</h4>
                        <p>«Развитие профессиональной компетентности преподавателя в современных условиях» 2018 ж.,</p>

                        <h4>Басылымдары:</h4>
                        <p>«Методическая разработка урока по Уголовному праву» infourok сайтында 2018 ж., жарияланды.</p>

                    </div>
                </div>
            </div>
            <?php }
             if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){?>
                 <div class="col-lg-6 pt-5 pt-lg-0">
                     <h3 data-aos="fade-up">Uspanova Zarina Naimanovna</h3>
                     <p data-aos="fade-up" data-aos-delay="100">
                         <strong>Head of the methodological Center></strong><br><br>
                     </p>
                     <div class="row">
                         <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                             <i class="bx bx-receipt"></i>
                             <h4>Work experience:</h4>
                             <p>9 years</p>
                         </div>
                         <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                             <i class="bx bx-cube-alt"></i>
                             <h4>Education:</h4>
                             <p>Higher legal education, Master of Legal Sciences</p>
                         </div>
                         <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                             <i class="bx bx-cube-alt"></i>
                             <h4>Position:</h4>
                             <p>Teacher of legal disciplines</p>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                             <i class="bx bx-receipt"></i>
                             <h4>Courses taught:</h4>
                             <p>law, procedural Law, Criminal Law,
                                 Criminal Procedure Law,
                                 Fundamentals of the theory of State and law</p>
                         </div>
                         <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                             <i class="bx bx-cube-alt"></i>
                             <h4>Category:</h4>
                             <p>Second</p>
                         </div>
                         <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                             <i class="bx bx-cube-alt"></i>
                             <h4>Qualification courses:</h4>
                             <p><ol type="1">
                                 <li>"Development of professional competence of the teacher in modern conditions", 2018</li>
                                 <li>Distance courses on improving the qualification "development and improvement of IT competence of teachers" Nao Talap, 2020</li>
                             </ol></p>
                             <h4>Publication:</h4>
                             <p>
                                 Article "New Educational System: Research, Theory and practice"<br><br>
                                 VI Republican scientific and practical conference,organized by the Republican scientific and methodological Center "ability", on the topic "criminal offenses against the individual" 2019
                             </p>
                         </div>
                     </div>
                 </div>
            <?php } ?>
    </div>
    </div>
</section><!-- End Team Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">
        <div class="section-title" data-aos="fade-up" style="margin-top: 0">
            <p><?php echo $lang['methodCenterPolozhenie']?></p>
            <h3><?php echo $lang['methodCenterPolozhenieO']?></h3>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="one">
                    <h2><?php echo $lang['obshiePolozheniya']?></h2>
                    <p style="line-height: 18px"><?php
                        echo nl2br($lang['obshiePolozheniyaContent']);?></p>

                    <h2><?php echo $lang['celiIZadachi']; ?></h2>
                    <p style="line-height: 18px"><?php
                        echo nl2br($lang['celiIZadachiContent']);?></p>

                    <h2><?php echo $lang['soderzhanieIOrganizaciya']?></h2>
                    <p style="line-height: 18px"><?php
                        echo nl2br($lang['soderzhanieIOrganizaciyaContent'])?></p>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 buttonsBlue" data-aos="zoom-in" data-aos-delay="100">
                <a href="nauchnayaDeyatelnost.php" class="btn btn-primary" role="button"><?php echo $lang['nauchnayaDeyatelnostButton']?></a>
            </div>
        </div>

    </div>
</section><!-- End Team Section -->



<?php require 'includes/footer.php'; ?>

</body>
</html>