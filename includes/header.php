<?php
require 'languages/lang.php';
require_once "languages/".$_SESSION['language'].".php";
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
        @media (max-width: 768px) {
            .dropdown-item{
                white-space: normal;
            }
        }
    </style>

</head>
<html>
    <body>
        <div class="container">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:  #152F4F;">
                    <a class="navbar-brand" href="../index.php" style="font-size: 2vw;">«Костанайский<br>Высший Колледж<br>Казпотребсоюза»</a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="margin-left: 50px">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php"> <?php echo $lang['home'] ?> <span class="sr-only"></span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang['aboutCollege'] ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item" href="collegeHistory.php"><?php echo $lang['history'] ?></a>
                                    <a class="dropdown-item" href="uchereditel.php"><?php echo $lang['uchereditel'] ?></a>
                                    <a class="dropdown-item" href="graphicRaboty.php"><?php echo $lang['graphicRaboty'] ?></a>
                                    <a class="dropdown-item" href="structure.php"><?php echo $lang['structure'] ?></a>
                                    <a class="dropdown-item" href="administration.php"><?php echo $lang['administration'] ?></a>
                                    <a class="dropdown-item" href="zavedushie.php"><?php echo $lang['zavedushie'] ?></a>
                                    <a class="dropdown-item" href="cafedry.php"><?php echo $lang['cafedry'] ?></a>
                                    <a class="dropdown-item" href="bazaCollege.php"><?php echo $lang['materialnayaBaza'] ?></a>
                                    <a class="dropdown-item" href="godovoiPlan.php"><?php echo $lang['godovoiPlan'] ?></a>
                                    <a class="dropdown-item" href="antiCorruption.php"><?php echo $lang['antiCorruptionStandart'] ?></a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang['abbiturientu'] ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown02">
                                    <a class="dropdown-item" href="priemnayaKomissiya.php"><?php echo $lang['priemnayaKomissiya'] ?></a>
                                    <a class="dropdown-item"
                                       <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus") { ?>
                                           href="http://kekk.kz/wp-content/uploads/2020/06/Instrukciya-po-portalu-EGOV-01.pdf"
                                       <?php }
                                       if (isset($_SESSION['language']) && $_SESSION['language'] == "kz") { ?>
                                           href="http://kekk.kz/kz/wp-content/uploads/2020/06/Instrukciya-po-portalu-EGOV-kaz-02.pdf"
                                       <?php }
                                       if (isset($_SESSION['language']) && $_SESSION['language'] == "en") { ?>
                                           href="http://kekk.kz/wp-content/uploads/2020/06/Instrukciya-po-portalu-EGOV-01.pdf"
                                       <?php } ?>
                                    >
                                        <?php echo $lang['podachaDocOnline']?></a>
                                    <a class="dropdown-item" href="specialnosti.php"><?php echo $lang['specialnosti']?></a>
                                    <a class="dropdown-item"
                                        <?php if (isset($_SESSION['language']) && $_SESSION['language'] == "rus") { ?>
                                            href="http://kekk.kz/kz/wp-content/uploads/2021/06/Pravila-priema-na-obuchenie-2021-22.pdf"
                                        <?php }
                                        if (isset($_SESSION['language']) && $_SESSION['language'] == "kz") { ?>
                                            href="http://kekk.kz/kz/wp-content/uploads/2021/06/Okuga-kabyldau-erezhesi-2021-22.pdf"
                                        <?php }
                                        if (isset($_SESSION['language']) && $_SESSION['language'] == "en") { ?>
                                            href="http://kekk.kz/kz/wp-content/uploads/2021/06/Pravila-priema-na-obuchenie-2021-22.pdf"
                                    <?php } ?>
                                    >
                                        <?php echo $lang['pravilaPriema']?></a>
                                    <a class="dropdown-item" href="documents.php"><?php echo $lang['documents']?></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang['studentam'] ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown03">
                                    <a class="dropdown-item" href="putevoditelStudenta.php"><?php echo $lang['putevoditelStudenta']?></a>
                                    <a class="dropdown-item" href="kodeksChecti.php"><?php echo $lang['kodeksChestiStudenta']?></a>
                                    <a class="dropdown-item" href="pravilaVnutrinnegoRasporyadka.php"><?php echo $lang['pravilaVnutrennegoRasporyadka']?></a>
                                    <a class="dropdown-item" href="vospitatelnayaDeyatelnost.php"><?php echo $lang['osnNapravleniyaVospitatelskoi']?></a>
                                    <a class="dropdown-item" href="raspisanieZanyati.php"><?php echo $lang['raspisanieZanatiy']?></a>
                                    <a class="dropdown-item" href="reitingStudentov.php"><?php echo $lang['reitingStudentov']?></a>
                                    <a class="dropdown-item" href="komitetMolodezh.php"><?php echo $lang['kommitetPoDelamMolodezhi']?></a>
                                    <a class="dropdown-item" href="nauchnoeObshestvo.php"><?php echo $lang['nauchnoeObshestvoStudentov']?></a>
                                    <a class="dropdown-item" href="sarmat.php"><?php echo $lang['Sarmat']?></a>
                                    <a class="dropdown-item" href="alash-2012.php"><?php echo $lang['Alash']?></a>
                                    <a class="dropdown-item" href="kruzhki.php"><?php echo $lang['Kruzhki']?></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang['prepodovatelyam'] ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="kodeksPrepodavatelei.php"><?php echo $lang['kodeksChestiPrepodovatelei']?></a>
                                    <a class="dropdown-item" href="norm-pravo-akt.php"><?php echo $lang['norm-pravoActy']?></a>
                                    <a class="dropdown-item" href="nauchnayaDeyatelnost.php"><?php echo $lang['nauchno-metodDeyatelnost']?></a>
                                    <a class="dropdown-item" href="reitingPrepodavatelei.php"><?php echo $lang['reitingPrepodovatelei']?></a>
                                    <a class="dropdown-item" href="metodKopilka.php"><?php echo $lang['metodKopilka']?></a>
                                    <a class="dropdown-item" href="videouroki.php"><?php echo $lang['nvideouroki']?></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang['roditelyam'] ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown05">
                                    <a class="dropdown-item" href="http://kekk.kz/wp-content/uploads/2021/02/Spisok-Kuratorov-2020-21-2.pdf" target="_blank"><?php echo $lang['spisokKuratorov2020-21']?></a>
                                    <a class="dropdown-item" href="pamyatkaRoditeli.php"><?php echo $lang['pamyatkaRoditelei']?></a>
                                    <a class="dropdown-item" href="stopTerrorism.php"><?php echo $lang['presechenieActTerrorisma']?></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang['uchProcess'] ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown06">
                                    <a class="dropdown-item" href="graphicUchebnogoProcess.php"><?php echo $lang['graphicUchProcessa']?></a>
                                    <a class="dropdown-item" href="raspisanieZanyati.php"><?php echo $lang['raspisanieZanatiy']?></a>
                                    <a class="dropdown-item" href="raspisanieExam.php"><?php echo $lang['raspisanieExam']?></a>
                                    <a class="dropdown-item" href="zamena-zanyatiy.php"><?php echo $lang['zamenaZanyati']?></a>
                                </div>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="news.php"><?php echo $lang['novosti']?><span class="sr-only"></span></a>
                            </li>

                            <?php if (!isset($_SESSION['user'])): ?>
                            <li class="nav-item active">
                                <a class="nav-link" href="includes/adminAuth.php"><?php echo $lang['admin'] ?><span class="sr-only"></span></a>
                            </li>
                            <?php endif; ?>

                            <?php if (isset($_SESSION['user'])):?>
                            <li class="nav-item active">
                                <a class="nav-link" href="includes/logout.php"><?php echo $lang['logout'] ?><span class="sr-only"></span></a>
                            </li>
                            <?php endif; ?>

                        </ul>
                        <div class="col-4 d-flex justify-content-md-start" style="margin-left: 15px">
                            <a class="btn btn-sm btn-outline-secondary" href="index.php?language=kz">қаз</a>
                            <a class="btn btn-sm btn-outline-secondary" href="index.php?language=rus">рус</a>
                            <a class="btn btn-sm btn-outline-secondary" href="index.php?language=en">eng</a>
                        </div>
                    </div>
                </nav>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>