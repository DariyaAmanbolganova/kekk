<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['bibliotechno-infoCentr']?></title>
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
            <p><?php echo $lang['bibliotechno-infoCentr']?></p>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 buttonsBlue" style="text-align: center" data-aos="zoom-in" data-aos-delay="100">
            <a href="informaciya-o-biblioteke.php" class="btn btn-primary" role="button"><?php echo $lang['infoOBiblioteke']?></a><br><br>
            <a href="sotrudnikiBiblioteki.php" class="btn btn-primary" role="button"><?php echo $lang['sotrudnikiBiblioteki']?></a><br><br>

            <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                <a href="pdf/Informacionnyy-byulleten-novykh-postupleniy.pdf" class="btn btn-primary" role="button"><?php echo $lang['infoBilutenNovyhPostupleniy']?></a><br><br>
            <?php }
            if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                <a href="pdf/Zhana-tүsilim-akparattyk-byulleteni.pdf" class="btn btn-primary" role="button"><?php echo $lang['infoBilutenNovyhPostupleniy']?></a><br><br>
            <?php }
            if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                <a href="pdf/Informacionnyy-byulleten-novykh-postupleniy.pdf" class="btn btn-primary" role="button"><?php echo $lang['infoBilutenNovyhPostupleniy']?></a><br><br>
            <?php }

            if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
            <a href="pdf/Перечень%20периодических%20изданий-2019.pdf" class="btn btn-primary" role="button"><?php echo $lang['perechenPeriodIzdaniy']?></a><br><br>
            <?php }
            if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                <a href="pdf/2019Кезеңдік%20баспалар.pdf" class="btn btn-primary" role="button"><?php echo $lang['perechenPeriodIzdaniy']?></a><br><br>
            <?php }
            if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                <a href="pdf/Перечень%20периодических%20изданий-2019.pdf" class="btn btn-primary" role="button"><?php echo $lang['perechenPeriodIzdaniy']?></a><br><br>
            <?php }

            if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
            <a href="pdf/prezentaciya-o-biblioteke.pdf" class="btn btn-primary" role="button"><?php echo $lang['presentationOBiblioteke']?></a><br><br>
            <?php }
            if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                <a href="pdf/prezentaciya-o-biblioteke-kaz.pdf" class="btn btn-primary" role="button"><?php echo $lang['presentationOBiblioteke']?></a><br><br>
            <?php }
            if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                <a href="pdf/prezentaciya-o-biblioteke.pdf" class="btn btn-primary" role="button"><?php echo $lang['presentationOBiblioteke']?></a><br><br>
            <?php } ?>
        </div>


</section><!-- End Team Section -->

<?php require 'includes/footer.php'; ?>

</body>
</html>