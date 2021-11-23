<?php
require 'database/connection.php';
require 'database/get/getNewsPodrobno.php';

$gosZakaz = getGosZakaz($conn);
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Государственный образовательный заказ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">

</head>
<html>
<body>
<?php require 'includes/header.php';

if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){
    $zakazContent = $gosZakaz['content_en'];
    $zakazImage = $gosZakaz['img_en'];

?>
<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <p>State educational order</p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div style="text-align: center">
                    <h4><?php echo $zakazContent;?>
                    </h4><br><br>
                    <img src="images/rus.jpeg" style="width: 100%;">
                </div>
            </div>
        </div>

    </div>
</section><!-- End Team Section -->
<?php }

if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){
$zakazContent = $gosZakaz['content_ru'];
$zakazImage = $gosZakaz['img_ru'];

?>
<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <p>Государственный образовательный заказ</p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div style="text-align: center">
                    <h4><?php echo $zakazContent;?>
                    </h4><br><br>
                    <img src="images/rus.jpeg" style="width: 100%;">
                </div>
            </div>
        </div>

    </div>
</section><!-- End Team Section -->
<?php }

if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){
$zakazContent = $gosZakaz['content_kz'];
$zakazImage = $gosZakaz['img_kz'];

?>
<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <p>Мемлекеттік білім беру тапсырысы</p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div style="text-align: center">
                    <h4><?php echo $zakazContent;?>
                    </h4><br><br>
                    <img src="images/kaz.jpeg" style="width: 100%;">
                </div>
            </div>
        </div>

    </div>
</section><!-- End Team Section -->
<?php }?>

<?php require 'includes/footer.php'; ?>

</body>
</html>