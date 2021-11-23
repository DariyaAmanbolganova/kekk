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
        .part{
            border-bottom: 2px solid #eb5d1e;
            margin-bottom: 20px;

        }
    </style>

</head>
<html>
<body>
<?php require 'includes/header.php';?>

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" >
        <div class="section-title" data-aos="fade-up" style="margin-top: 120px">
            <p><?php echo $lang['o-specialnostyah-pravovedenie-Title']?></p>
        </div>
        <div class="row justify-content-md-center part">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <h4><?php echo nl2br($lang['naimenovanie-specialnosti'])?></h4>
                <p><?php echo nl2br($lang['naimenovanie-specialnosti-pravo'])?></p>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4><?php echo nl2br($lang['kvalifokaciya'])?></h4>
                        <p><?php echo nl2br($lang['kvalifokaciya-pravo'])?></p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['forma-obucheniya'])?></h4>
                        <p><?php echo nl2br($lang['forma-obucheniya-pravo'])?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['srok-obucheniya'])?></h4>
                        <p><?php echo nl2br($lang['srok-obucheniya-uchet'])?></p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['oblast-prof-deyatelnosti'])?></h4>
                        <p><?php echo nl2br($lang['oblast-prof-deyatelnosti-pravo'])?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['kompetencii'])?></h4>
                        <p><?php echo nl2br($lang['kompetencii-pravo'])?></p>
                    </div>
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['prof-praktika'])?></h4>
                        <p><?php echo nl2br($lang['prof-praktika-pravo'])?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-md-center part">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <h4><?php echo nl2br($lang['naimenovanie-specialnosti'])?></h4>
                <p><?php echo nl2br($lang['naimenovanie-specialnosti-ocenka'])?></p>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4><?php echo nl2br($lang['kvalifokaciya'])?></h4>
                        <p><?php echo nl2br($lang['kvalifokaciya-ocenka'])?></p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['forma-obucheniya'])?></h4>
                        <p><?php echo nl2br($lang['forma-obucheniya-ocenka'])?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['srok-obucheniya'])?></h4>
                        <p><?php echo nl2br($lang['srok-obucheniya-ocenka'])?></p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['oblast-prof-deyatelnosti'])?></h4>
                        <p><?php echo nl2br($lang['oblast-prof-deyatelnosti-ocenka'])?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['kompetencii'])?></h4>
                        <p><?php echo nl2br($lang['kompetencii-ocenka'])?></p>
                    </div>
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['prof-praktika'])?></h4>
                        <p><?php echo nl2br($lang['prof-praktika-ocenka'])?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-md-center part">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <h4><?php echo nl2br($lang['naimenovanie-specialnosti'])?></h4>
                <p><?php echo nl2br($lang['naimenovanie-specialnosti-socRabota'])?></p>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4><?php echo nl2br($lang['kvalifokaciya'])?></h4>
                        <p><?php echo nl2br($lang['kvalifokaciya-socRabota'])?></p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['forma-obucheniya'])?></h4>
                        <p><?php echo nl2br($lang['forma-obucheniya-socRabota'])?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['srok-obucheniya'])?></h4>
                        <p><?php echo nl2br($lang['srok-obucheniya-socRabota'])?></p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['oblast-prof-deyatelnosti'])?></h4>
                        <p><?php echo nl2br($lang['oblast-prof-deyatelnosti-socRabota'])?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['kompetencii'])?></h4>
                        <p><?php echo nl2br($lang['kompetencii-socRabota'])?></p>
                    </div>
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php echo nl2br($lang['prof-praktika'])?></h4>
                        <p><?php echo nl2br($lang['prof-praktika-socRabota'])?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End About Section -->

<?php require 'includes/footer.php'; ?>

</body>
</html>
