<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['infoOBiblioteke']?></title>
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
            <p><?php echo $lang['infoOBiblioteke']?></p>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="one">
                    <h5 style="line-height: 25px"><?php
                        echo nl2br($lang['infoOBibliotekeContent']);?></h5>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Team Section -->



<?php require 'includes/footer.php'; ?>

</body>
</html>