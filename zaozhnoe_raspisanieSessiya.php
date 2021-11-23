<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">

</head>
<html>
<body>
<?php require 'includes/header.php';?>

<!-- ======= Team Section ======= -->
<section id="team" class="team" style="padding-top: 0">
    <div class="container">
        <div class="section-title" data-aos="fade-up" style="margin-top: 120px">
            <p><?php echo $lang['zaozhnoe_RaspisanieSessiya']?></p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 anchor" style="text-align: center" data-aos="zoom-in" data-aos-delay="100">
                <!-- Установочная Сессия: -->
                <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/USTANOVOCHNAYA-sessiya--bez-podpis.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_UstanovochnayaSessiya'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/USTANOVOCHNAYA-sessiya--kaz.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_UstanovochnayaSessiya'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/USTANOVOCHNAYA-sessiya--bez-podpis.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_UstanovochnayaSessiya'] ?></a><br><br>

                <?php } ?>

                <!-- Зимняя Сессия: -->
                <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/zimn-sessiya-rus.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_ZimnayaSessiya'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/sessiya-zimn---KAZ.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_ZimnayaSessiya'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/zimn-sessiya-rus.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_ZimnayaSessiya'] ?></a><br><br>

                <?php } ?>

                <!-- Весенняя Сессия 1 Курса: -->
                <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/vesenney-sessii-1-kursa--rus.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_Vesennaya1Kurs'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/vesenney-sessii-1-kursa--kaz.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_Vesennaya1Kurs'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/vesenney-sessii-1-kursa--rus.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_Vesennaya1Kurs'] ?></a><br><br>

                <?php } ?>

                <!-- Весенняя Сессия 2 Курса: -->
                <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/vesenney-sessii-2-kursa--rus.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_Vesennaya2Kurs'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/vesenney-sessii-2-kursa---kaz.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_Vesennaya2Kurs'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/vesenney-sessii-2-kursa--rus.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_Vesennaya2Kurs'] ?></a><br><br>

                <?php } ?>

                <!-- Государственный Экзамен: -->
                <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/gos-examen-rus.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_GosExam'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/gos-examen-kaz.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_GosExam'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                    <a href="pdf/zaozhnoeOtdelenie/gos-examen-rus.pdf" target="_blank" role="button"><?php echo $lang['zaochnoe_GosExam'] ?></a><br><br>

                <?php } ?>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->


<?php require 'includes/footer.php'; ?>

</body>
</html>
