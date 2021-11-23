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
        ul{
            list-style-type: none;
        }
    </style>

</head>
<html>
<body>
<?php require 'includes/header.php';?>

<!-- ======= Team Section ======= -->
<section id="team" class="team" style="padding-top: 0">
    <div class="container">
        <div class="section-title" data-aos="fade-up" style="margin-top: 120px">
            <p><?php echo $lang['zaozhnoe_SpiskiGrup']?></p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 anchor" style="text-align: center" data-aos="zoom-in" data-aos-delay="100">

                    <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
                        <!-- 1.Специальность «Учет и аудит»: -->
                        <li>1. <?php echo $lang['zaozhnoe_spiskiGrup_uchetAudit'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Uchet-i-Audit-1course-rus.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Uchet-i-Audit-2course-rus.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                        <!-- 2.Специальность «Правоведение»: -->
                        <li>2. <?php echo $lang['zaozhnoe_spiskiGrup_pravo'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Pravo-1course-rus.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Pravo-2course-rus.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                        <!-- 3.Специальность «Финансы»: -->
                        <li>3. <?php echo $lang['zaozhnoe_spiskiGrup_financy'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Fianacy-1course-rus.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Fianacy-2course-rus.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                        <!-- 4.Специальность «Менеджмент»: -->
                        <li>4. <?php echo $lang['zaozhnoe_spiskiGrup_management'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Management-1course-rus.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Management-2course-rus.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                    <?php }


                    if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
                        <!-- 1.Специальность «Учет и аудит»: -->
                        <li>1. <?php echo $lang['zaozhnoe_spiskiGrup_uchetAudit'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Uchet-i-Audit-1course-kaz.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Uchet-i-Audit-2course-kaz.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                        <!-- 2.Специальность «Правоведение»: -->
                        <li>2. <?php echo $lang['zaozhnoe_spiskiGrup_pravo'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Pravo-1course-kaz.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Pravo-2course-kaz.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                        <!-- 3.Специальность «Финансы»: -->
                        <li>3. <?php echo $lang['zaozhnoe_spiskiGrup_financy'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Fianacy-1course-kaz.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Fianacy-2course-kaz.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                        <!-- 4.Специальность «Менеджмент»: -->
                        <li>4. <?php echo $lang['zaozhnoe_spiskiGrup_management'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Management-1course-kaz.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Management-2course-kaz.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                    <?php }

                    if (isset($_SESSION['language']) && $_SESSION['language'] == "en"){ ?>
                        <li>1. <?php echo $lang['zaozhnoe_spiskiGrup_uchetAudit'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Uchet-i-Audit-1course-rus.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Uchet-i-Audit-2course-rus.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                        <!-- 2.Специальность «Правоведение»: -->
                        <li>2. <?php echo $lang['zaozhnoe_spiskiGrup_pravo'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Pravo-1course-rus.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Pravo-2course-rus.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                        <!-- 3.Специальность «Финансы»: -->
                        <li>3. <?php echo $lang['zaozhnoe_spiskiGrup_financy'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Fianacy-1course-rus.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Fianacy-2course-rus.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                        <!-- 4.Специальность «Менеджмент»: -->
                        <li>4. <?php echo $lang['zaozhnoe_spiskiGrup_management'] ?>
                            <ul>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Management-1course-rus.pdf" target="_blank" role="button"><?php echo $lang['firstCourse']?></a></li>
                                <li><a href="pdf/zaozhnoeOtdelenie/spiski-group-Management-2course-rus.pdf" target="_blank" role="button"><?php echo $lang['secondCourse']?></a></li>
                            </ul>
                        </li>
                    <?php } ?>

            </div>
        </div>
    </div>
</section><!-- End Team Section -->


<?php require 'includes/footer.php'; ?>

</body>
</html>
