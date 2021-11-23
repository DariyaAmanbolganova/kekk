<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    <style>
        .images{
            width: 60%;
            margin: auto;
        }
        .images img{
            width: 100%;
            margin-bottom: 25px;
        }
        @media (max-width: 768px) {
            .images{
                width: 90%;
            }
            .images img{
                width: 100%;
                margin-bottom: 25px;
            }
        }
        .buttonsOrange a{
            padding: 4px;
        }
    </style>

</head>
<html>
<body>
<?php require 'includes/header.php';?>
<h1 style="margin-top: 135px; font-size: 23px; text-align: center; font-weight: bold; padding-bottom: 15px">
    <?php echo $lang['social-psychoSluzhba']?>
</h1>

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" >
        <div class="row justify-content-between">
            <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                <img src="images/abdrahmanova-svetlana.jpg" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">Абдрахманова Светлана Темирбаевна</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Психолог</strong><br><br>
                        Тел.: 8-777-297-00-35<br>
                    </p>
                </div>
            <?php }

            if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">Абдрахманова Светлана Темирбаевна</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Психолог</strong><br><br>
                        Тел: 8-777-297-00-35<br>
                    </p>
                </div>
            <?php }

            if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">Abdrahmanova Svetlana Temirbayevna</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Psychologist</strong><br><br>
                        Phone number: 8-777-297-00-35<br>
                    </p>
                </div>
            <?php } ?>
        </div>
        <hr style="background-color: #eb5d1e; margin-top: 25px; margin-bottom: 25px; height: 5px">
    </div>
</section><!-- End About Section -->


<!-- ======= Team Section ======= -->
<section id="team" class="team" style="padding-top: 0">
    <div class="container">
        <div class="section-title" data-aos="fade-up" style="margin-top: 0">
            <p><?php echo $lang['polozhenieSocialPsySluzba']?></p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="one">
                    <h5 style="line-height: 25px"><?php
                        echo nl2br($lang['polozhenieSocialPsySluzbaContent']);?></h5>
                </div>
            </div>
        </div>

        <div class="section-title" data-aos="fade-up" style="margin-top: 0">
            <p><?php echo $lang['sovetyPsihologa']?></p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="one">
                    <h5 style="line-height: 25px"><?php
                        echo nl2br($lang['sovetyPsihologaContent']);?></h5>
                </div>
            </div>
        </div>

        <div class="section-title" data-aos="fade-up" style="margin-top: 0">
            <p><?php echo $lang['roditelyamPervokursika']?></p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="images" style="text-align: center">
                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                    <img src="images/sovetyRoditelyamPsihiloga/rus.jpg">
                    <?php }
                    if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                    <img src="images/sovetyRoditelyamPsihiloga/kaz.jpg">
                    <?php } ?>
                </div>
                <div class="one">
                    <h5 style="line-height: 25px"><?php
                        echo nl2br($lang['roditelyamPervokursikaContent']);?></h5>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="team" class="team" style="padding-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 anchor buttonsOrange" style="text-align: center" data-aos="zoom-in" data-aos-delay="100">
                <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                    <a href="pdf/socialnayaSluzhba/BUKLET-DLYA-RODITELEY.pdf" target="_blank"  role="button"><?php echo $lang['bukletRoditelei'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Rekomendacii-dlya-roditeley-po-profilaktike-podrostkovykh-suicidov.pdf" target="_blank" role="button"><?php echo $lang['rekomendatsiiRoditelyam'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Popav-v-tyazheluyu-situaciyu.pdf" target="_blank" role="button"><?php echo $lang['popavVTyazholyuSituatsiyu'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Mamy-i-Papy-Pomnite.pdf" target="_blank" role="button"><?php echo $lang['mamyIPapy'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Kak-povyshat-uchebnuyu-motivaciyu-svoikh-detey.pdf" target="_blank" role="button"><?php echo $lang['kakPovisitMotivaciyu'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Kak-obshhatsya-s-podrostkom.pdf" target="_blank" role="button"><?php echo $lang['kakObshatsyaSPodrostkom'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Kak-vesti-sebya-s-podrostkom-chtoby-ne-stat-ego-vragom.pdf" target="_blank" role="button"><?php echo $lang['kakVestiSebyaSPodrostkom'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                    <a href="pdf/socialnayaSluzhba/kaz/ATA-ANALARGA-ARNALGAN-BUKLET.pdf" target="_blank" role="button"><?php echo $lang['bukletRoditelei'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/kaz/ZHasospirimder-arasyndagy-suicidtin-aldyn-alu-boyynsha-ata-analarga-arnalgan-usynystar.pdf" target="_blank" role="button"><?php echo $lang['rekomendatsiiRoditelyam'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/kaz/" target="_blank" role="button"><?php echo $lang['popavVTyazholyuSituatsiyu'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/kaz/Analar-men-akeler-Esinizde-bolsyn.pdf" target="_blank" role="button"><?php echo $lang['mamyIPapy'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/kaz/Oz-balalarynyn-oku-motivaciyasyn-kalay-arttyruga-bolady.pdf" target="_blank" role="button"><?php echo $lang['kakPovisitMotivaciyu'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/kaz/ZHasospirimmen-kalay-soylesuge-bolady.pdf" target="_blank" role="button"><?php echo $lang['kakObshatsyaSPodrostkom'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/kaz/Onyn-zhauy-bolmau-үshin-zhasospirimmen-ozin-kalay-ustau-kerek.pdf" target="_blank" role="button"><?php echo $lang['kakVestiSebyaSPodrostkom'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                    <a href="pdf/socialnayaSluzhba/BUKLET-DLYA-RODITELEY.pdf" target="_blank" role="button"><?php echo $lang['bukletRoditelei'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Rekomendacii-dlya-roditeley-po-profilaktike-podrostkovykh-suicidov.pdf" target="_blank" role="button"><?php echo $lang['rekomendatsiiRoditelyam'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Popav-v-tyazheluyu-situaciyu.pdf" target="_blank" role="button"><?php echo $lang['popavVTyazholyuSituatsiyu'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Mamy-i-Papy-Pomnite.pdf" target="_blank" role="button"><?php echo $lang['mamyIPapy'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Kak-povyshat-uchebnuyu-motivaciyu-svoikh-detey.pdf" target="_blank" role="button"><?php echo $lang['kakPovisitMotivaciyu'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Kak-obshhatsya-s-podrostkom.pdf" target="_blank" role="button"><?php echo $lang['kakObshatsyaSPodrostkom'] ?></a><br><br>
                    <a href="pdf/socialnayaSluzhba/Kak-vesti-sebya-s-podrostkom-chtoby-ne-stat-ego-vragom.pdf" target="_blank" role="button"><?php echo $lang['kakVestiSebyaSPodrostkom'] ?></a><br><br>
                <?php } ?>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->


<?php require 'includes/footer.php'; ?>

</body>
</html>