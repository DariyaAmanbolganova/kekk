<?php
require 'languages/lang.php';
require 'database/connection.php';

/*if (isset($_POST['addOtzyv'])) {
    $sql = "INSERT INTO otzyvy(name_group, otzyv_content)
    VALUES ('".$_POST['name_group']."',
            '".$_POST['otzyv_content']."')";
    $res = mysqli_query($conn,$sql);
    if ($res == false) {
        echo mysqli_error($conn);
    }else{
        header("otzyvy.php");
    }
}

$sqlGetOtzyvy = "SELECT * FROM otzyvy
 order by otzyv_id desc";
$res = mysqli_query($conn, $sqlGetOtzyvy);
if ($res === false) {
    echo mysqli_error($conn);
} else {
    $otzyvyAll = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

*/?>
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
            <p><?php echo $lang['otzyvy'] ?></p>
        </div>

        <!-- Форма для отзыва:-->
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="card">
                        <div class="card-body">
                            <div style="text-align: center; margin-bottom: 45px">
                                <input type="submit" class="btn btn-primary rep" data-id="" value="Оставить Отзыв" style="background-color: #eb5d1e; border-color: black">
                            </div>
                            <form method="post" class="replyForm" style="display: none">
                                <div class="form-group">
                                    <label>Имя, группа:</label><input class="form-control" type="text" name="name_group"><br><br>
                                    <label>Ваш Отзыв:</label><textarea class="form-control"
                                                                       rows="6" cols="20" name="otzyv_content"></textarea><br>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="addOtzyv" class="btn btn-primary" value="Отправить">
                                </div>
                            </form>
                            <span id="comment_message"></span>
                        </div>

                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>

        <!--<div class="row">
            <div class="col-md-12">
                <div id="display_comment">
                    <?php /*foreach ($otzyvyAll as $otzyvOne):*/?>
                    <div class="panel panel-default" style="padding: 8px; margin-bottom: 20px;">
                        <div class="panel-heading" style="text-align: center"><b><?php /*echo $otzyvOne['name_group']; */?></b></div>
                        <div class="panel-body" style="width: 85%; margin: auto; text-align: center"><?php /*echo $otzyvOne['otzyv_content']; */?></div>
                    </div>
                    <hr>
                    <?php /*endforeach;*/?>
                </div>
            </div>
        </div>-->

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6" style="float:none; margin: 60px auto" data-aos="zoom-in" data-aos-delay="100">
                    <div class="graphic-image">
                            <img src="images/blagodarnost/img1.png">
                            <img src="images/blagodarnost/img2.png">
                            <img src="images/blagodarnost/img3.png">
                    </div>

                </div>
            </div>
    </div>
</section><!-- End Team Section -->

<script>
    $(document).ready(function(){
        $(document).on('click' , 'input.rep' , function(){
            var closestDiv = $(this).closest('div'); // also you can use $(this).parent()
            //closestDiv.fadeOut();
            $('.replyForm').not(closestDiv.next('.replyForm')).hide();
            //$('.rep').closest('div').not(closestDiv).show()
            closestDiv.next('form.replyForm').show();
        });
    });
</script>


<?php require 'includes/footer.php'; ?>

</body>
</html>
