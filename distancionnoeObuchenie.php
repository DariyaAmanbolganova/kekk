<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">

    <script>
        // When the user clicks on div, open the popup
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
    </script>

</head>
<html>
<body>
<?php require 'includes/header.php';?>

<!-- ======= Team Section ======= -->
<section id="team" class="team" style="padding-top: 0">
    <div class="container">
        <div class="section-title" data-aos="fade-up" style="margin-top: 120px">
            <p><?php echo $lang['distancionnoeObuchenie']?></p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 anchor" style="text-align: center" data-aos="zoom-in" data-aos-delay="100">
                <a href="http://kekk.sova.ws/login" target="_blank"  role="button"><?php echo $lang['voitiNaSait'] ?></a><br><br>
                <a href="pdf/distansObuchenie/rus/uchitel.pdf" target="_blank"  role="button"><?php echo $lang['rukovodstvoPrepodovatelya'] ?></a><br><br>
                <a href="pdf/distansObuchenie/rus/student.pdf" target="_blank"  role="button"><?php echo $lang['rukovodstvoStudenta'] ?></a><br><br>

                <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                    <a href="pdf/distansObuchenie/rus/organizaciya-uchebnogo-processa-v-DO.pdf" target="_blank"  role="button"><?php echo $lang['instrukciyaPoOrganizacii'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                    <a target="_blank" role="button"><?php echo $lang['instrukciyaPoOrganizacii'] ?></a><br><br>
                <?php }

                if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                    <a target="_blank" role="button"><?php echo $lang['instrukciyaPoOrganizacii'] ?></a><br><br>

                <?php } ?>
                <a href="https://www.youtube.com/watch?v=1TnN3b21yFo" target="_blank" role="button"><?php echo $lang['videoInstrukciya'] ?></a><br><br>
                <div class="popup" onclick="myFunction()">
                    <a target="_blank" role="button"><?php echo $lang['techPodderzhka'] ?></a><br>

                    <span class="popuptext" id="myPopup">
                        <div style="border: 2px solid #eb5d1e; width: 60%; margin: auto">
                        Координатор для обратной связи со студентами и родителями заместитель директора по воспитательной работе - Кунтуган Бахытхан Кунтуганович Тел: 87013446960<br>
                        Тех. поддержка: 87478371988 87771738218
                        </div>
                    </span>
                </div>
                <br><br>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->





<?php require 'includes/footer.php'; ?>

</body>
</html>
