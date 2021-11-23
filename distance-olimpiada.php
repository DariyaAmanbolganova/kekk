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
            <p><?php echo $lang['distance-online-olimpiada']?></p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 anchor" style="text-align: center" data-aos="zoom-in" data-aos-delay="100">
                <h5><?php echo $lang['online-olimpiada-Content']?></h5>

                <form>
                    <label>Пароль: </label>
                    <input type="password">
                    <input type="button" value="Войти">
                </form>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->





<?php require 'includes/footer.php'; ?>

</body>
</html>
