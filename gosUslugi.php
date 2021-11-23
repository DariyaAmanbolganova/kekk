<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['gosUslugi']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    <style>
        @media (max-width: 768px) {
            .buttonsBlue a {
                width: 100%;
                overflow: scroll;
            }
        }
    </style>

</head>
<html>
<body>
<?php require 'includes/header.php';?>

<!-- ======= Team Section ======= -->
<section id="team" class="team" style="padding-top: 0">
    <div class="container">
        <div class="section-title" data-aos="fade-up" style="margin-top: 120px">
            <p><?php echo $lang['gosUslugi']?></p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 buttonsBlue" style="text-align: center; " data-aos="zoom-in" data-aos-delay="100">
                <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                    <a href="https://eduvkpk.edu.kz/rus/" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['dublikatyDoc']) ?></a><br><br>
                    <a href="https://eduvkpk.edu.kz/rus/" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['perevodObuchaushihsya']) ?></a><br><br>
                    <a href="https://eduvkpk.edu.kz/rus/" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['priemDocTechProfObraz']) ?></a><br><br>
                    <a href="https://eduvkpk.edu.kz/rus/" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['priemDocPodgotovkaKadrov']) ?></a><br><br>
                    <a href="https://eduvkpk.edu.kz/rus/" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['priemDocAtestaciya']) ?></a><br><br>
                    <a href="https://eduvkpk.edu.kz/rus/" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['vudachaSpravkiNeZavershivshim']) ?></a><br><br>
                    <a href="https://eduvkpk.edu.kz/rus/" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['besplatnoePitanie']) ?></a><br><br>
                    <a href="https://eduvkpk.edu.kz/rus/" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['pravilaMestObshezhitiya']) ?></a><br><br>
                    <a href="https://eduvkpk.edu.kz/rus/" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['academOtpusk']) ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                    <a href="pdf/gosUslugi/kaz/dublikaty-kaz.pdf" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['dublikatyDoc']) ?></a><br><br>
                    <a href="https://adilet.zan.kz/kaz/docs/V1500012417#z11" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['perevodObuchaushihsya']) ?></a><br><br>
                    <a href="pdf/gosUslugi/kaz/priem-dokumentov-v-org-tekh-i-prof-obr.pdf" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['priemDocTechProfObraz']) ?></a><br><br>
                    <a href="pdf/gosUslugi/kaz/priem-dokumentov-kadr-dayarlay.pdf" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['priemDocPodgotovkaKadrov']) ?></a><br><br>
                    <a href="pdf/gosUslugi/kaz/priem-dokumentov-dlya-attestacii.pdf" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['priemDocAtestaciya']) ?></a><br><br>
                    <a href="https://adilet.zan.kz/kaz/docs/V1500012417#z44" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['vudachaSpravkiNeZavershivshim']) ?></a><br><br>
                    <a href="pdf/gosUslugi/kaz/zhekelegen-sanattagy-azamattarga-tegin-tamaktandury.pdf" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['besplatnoePitanie']) ?></a><br><br>
                    <a href="pdf/gosUslugi/kaz/obshhezhitie-kaz.pdf" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['pravilaMestObshezhitiya']) ?></a><br><br>
                    <a href="pdf/gosUslugi/kaz/bilim-alushylarga-akademiyalyk-demalystar-beru.pdf" target="_blank" class="btn btn-primary" role="button"><?php echo nl2br($lang['academOtpusk']) ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>

                <?php } ?>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->


<?php require 'includes/footer.php'; ?>

</body>
</html>
