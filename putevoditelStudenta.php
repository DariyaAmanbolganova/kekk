<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Путеводитель</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    <!-- Подключаем CSS слайдера -->
    <link rel="stylesheet" href="css/slider-putevoditel.css">
    <!-- Подключаем JS слайдера -->
    <script defer src="js/simple-adaptive-slider.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // инициализация слайдера
            var slider = new SimpleAdaptiveSlider('.slider', {
                autoplay: false,
                interval: 5000,
                swipe: true,
            });
        });
    </script>

</head>
<html>
<body>
<?php require 'includes/header.php';?>

<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">

        <div class="row">
            <div>
                <div class="slider" style="margin-top: 100px">
                    <div class="slider__wrapper">
                        <div class="slider__items">
                            <?php if (isset($_SESSION['language']) && ($_SESSION['language'] == "rus" || $_SESSION['language'] == "en")) { ?>
                            <div class="slider__item">
                                <img src="images/putevoditelStudenta/rus/1.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/2.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/3.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/4.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/5.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/6.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/7.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/8.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/9.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/10.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/11.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/12.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/13.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/14.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/15.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/16.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/17.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/18.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/19.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/20.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/21.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/rus/22.jpg">
                            </div>
                            <?php }
                             if (isset($_SESSION['language']) && $_SESSION['language'] == "kz") { ?>
                            <div class="slider__item">
                                <img src="images/putevoditelStudenta/kaz/1.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/2.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/3.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/4.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/5.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/6.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/7.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/8.png">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/9.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/10.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/11.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/12.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/13.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/14.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/15.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/16.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/17.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/18.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/19.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/20.jpg">
                            </div>
                            <div class="slider__item" style="height: 450px;">
                                <img src="images/putevoditelStudenta/kaz/21.jpg">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <a class="slider__control slider__control_prev" href="#" role="button" data-slide="prev"></a>
                    <a class="slider__control slider__control_next" href="#" role="button" data-slide="next"></a>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Team Section -->

<?php require 'includes/footer.php'; ?>

</body>
</html>