<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php $lang['title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">

</head>
<html>
<body>
<?php require 'includes/header.php';?>
<section id="team" class="team">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <p><?php echo $lang['accreditaciya'] ?></p>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6" style="float:none; margin: 0 auto" data-aos="zoom-in" data-aos-delay="100">
                <div class="graphic-image">
                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                        <img src="images/banner/accreditaciya/one.png">
                        <img src="images/banner/accreditaciya/two.png">
                        <img src="images/banner/accreditaciya/three.png">
                    <? }
                    if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){  ?>
                        <img src="images/banner/accreditaciya/one-kaz.png">
                        <img src="images/banner/accreditaciya/two-kaz.png">
                        <img src="images/banner/accreditaciya/three-kaz.png">
                    <?php }
                    if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                        <img src="images/banner/accreditaciya/one.png">
                        <img src="images/banner/accreditaciya/two.png">
                        <img src="images/banner/accreditaciya/three.png">
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</section><!-- End Team Section -->

<?php require 'includes/footer.php'; ?>

</body>
</html>
