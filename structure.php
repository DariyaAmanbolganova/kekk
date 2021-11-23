<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['structure']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="css/style.css" rel="stylesheet">

</head>
<html>
<body>
<?php require 'includes/header.php';?>
<h1 style="margin-top: 135px; font-size: 23px; text-align: center; font-weight: bold; padding-bottom: 15px">
    <?php echo $lang['structure']?>
</h1>

<?php
if (isset($_SESSION['language']) && $_SESSION['language'] == "rus"){ ?>
<img src="images/structura-organiacii-rus.jpg" style="display: block; margin-right: auto; margin-left: auto;" alt="image">
<?php
}
if (isset($_SESSION['language']) && $_SESSION['language'] == "kz"){ ?>
<img src="images/structura-organiacii-kz.png" style="display: block; margin-right: auto; margin-left: auto;" alt="image">
<?php
}
require 'includes/footer.php'; ?>

</body>
</html>
