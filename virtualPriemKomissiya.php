<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Государственный образовательный заказ</title>
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
    </style>

</head>
<html>
<body>
<?php require 'includes/header.php'; ?>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <p><?php echo $lang['virtualPriemKomissiya']?></p>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){
                    ?>
                        <div style="text-align: center">
                            <h4>
                                Online consultation in ZOOM<br>
                                Conference ID: 574 884 3799<br>
                                Access code:568145<br>
                                You can get answers to all your questions by calling us by phones: 8 (7142) 568145; 8747 034 1312<br>
                                Mail: kvekk_provcenter@mail.ru<br>
                            </h4>
                        </div>
                    <?php }

                    if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                        <div class="images" style="text-align: center">
                            <img src="images/virtualPriemnayaKomissiya/vpk1.jpg">
                            <img src="images/virtualPriemnayaKomissiya/vpk2.jpeg">
                            <img src="images/virtualPriemnayaKomissiya/vpk3.jpg">
                            <img src="images/virtualPriemnayaKomissiya/vpk4.jpg">
                        </div>
                    <?php }
                    if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                        <div class="images" style="text-align: center">
                            <img src="images/virtualPriemnayaKomissiya/kaz1.jpg">
                            <img src="images/virtualPriemnayaKomissiya/kaz2.jpeg">
                            <img src="images/virtualPriemnayaKomissiya/kaz3.jpg">
                            <img src="images/virtualPriemnayaKomissiya/kaz4.jpg">
                        </div>
                    <?php } ?>
                    <div class="col-xl-12 col-lg-12 col-md-12 youtubeVideo" data-aos="zoom-in" data-aos-delay="100">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9VwbHaW4pRI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Team Section -->
<?php require 'includes/footer.php'; ?>

</body>
</html>