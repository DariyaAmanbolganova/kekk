<?php
require 'languages/lang.php';
require 'database/connection.php';


if (isset($_POST['addComment'])) {
    $sql = "INSERT INTO blog_d_comments(comment, comment_sender_name, createdOn)
    VALUES (
            '".$_POST['comment_content']."',
            '".$_POST['comment_sender']."',
            now()
            )";
    $res = mysqli_query($conn,$sql);
    if ($res == false) {
        echo mysqli_error($conn);
    }else{
        header("blogDirectora.php");
    }
}

if (isset($_POST['replyComment'])) {
    $sql = "INSERT INTO blog_d_replies(parent_comment_id, content, createdOn)
    VALUES ('".$_POST['parent_comment_id']."',
            '".$_POST['reply_content']."',
            now()
            )";
    $res = mysqli_query($conn,$sql);
    if ($res == false) {
        echo mysqli_error($conn);
    }else{
        header("Location: blogDirectora.php");
    }
}

$sqlGetComments = "SELECT * FROM blog_d_comments
 order by comment_id desc";
$res = mysqli_query($conn, $sqlGetComments);
if ($res === false) {
    echo mysqli_error($conn);
} else {
    $commentsAll = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

$sqlGetReplies = "SELECT * FROM blog_d_replies";
$res = mysqli_query($conn, $sqlGetReplies);
if ($res === false) {
    echo mysqli_error($conn);
} else {
    $repliesAll = mysqli_fetch_all($res, MYSQLI_ASSOC);
}




?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $lang['title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet">

</head>
<html>
<body>
<?php require 'includes/header.php'; ?>


<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <p><?php echo $lang['blogDirectora'] ?></p>
        </div>
        <div class="row justify-content-start">
            <div class="col-lg-5 d-flex align-items-baseline justify-content-center about-img">
                <img src="images/administraciya/director.jpg" class="img-fluid" alt="" data-aos="zoom-in">
            </div>

            <div class="col-lg-6 pat-5 pt-lg-0">
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h5><?php echo $lang['blog_oDirectore'] ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="team" class="team" style="padding-top: 0">
    <div class="container">
        <div class="section-title" data-aos="fade-up" style="margin-top: 0">
            <p><?php echo $lang['blog_PosetiteliBloga'] ?></p>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in" data-aos-delay="100">
                <div class="one">
                    <h5 style="line-height: 25px"><?php echo nl2br($lang['blog_Posetiteli_Content']); ?></h5>
                </div>

                <!-- Форма для комменария:-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post" id="comment_form">
                                        <div class="form-group">
                                            <label>Имя:</label><input class="form-control" type="text" name="comment_sender"  id="comment_name"
                                            ><br><br>
                                            <label>Комментарий:</label><textarea class="form-control"
                                                                                 rows="6" cols="20" name="comment_content" id="comment_content"></textarea><br>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="addComment" class="btn btn-primary" value="Отправить комментарий">
                                        </div>
                                    </form>
                                    <span id="comment_message"></span>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>

                    <!-- Форма для ответов на комментарии:-->
                    <div class="row">
                        <div class="col-md-12">
                            <div id="display_comment">
                                <?php foreach ($commentsAll as $commentOne):

                                    $reply_comment_id = $commentOne["comment_id"]; ?>
                                    <div class="panel panel-default" style="border: 1px solid black; padding: 8px; margin-bottom: 10px;">
                                        <div class="panel-heading">От: <b><?php echo $commentOne['comment_sender_name']; ?></b> <i><?php echo $commentOne['createdOn']; ?></i>
                                        </div>
                                        <div class="panel-body"><?php echo $commentOne['comment']; ?></div>

                                        <?php
                                        if (isset($_SESSION['user'])){
                                            if ($_SESSION['user']['username']=='admin'){
                                                echo '<div class"panel-footer">
                                                        <div style="margin-top: 8px;">
                                                            <input type="submit" class="btn btn-primary rep" data-id="" value="Ответить">
                                                        </div>
                                                        <form class="replyForm" data-id="" method="post" action="" style="margin-top: 20px; display: none" >
                                                            <input readonly name="parent_comment_id" style="float: right; width: 30px" value="'; echo $reply_comment_id; echo '">
                                                            <textarea class="form-control" rows="4" name="reply_content" class="post_rep" placeholder="Ваш ответ"></textarea>
                                                            <input type="submit" id="replyComment" name="replyComment" value="Отправить ответ" style="margin: 5px"><br>
                                                        </form>
                                                      </div>';
                                            }
                                        }
                                        ?>

                                        <div style= "margin-left: 40px; margin-bottom: 20px">
                                            <p style="margin-top: 15px; font-weight: bold">Ответы:</p>
                                            <?php foreach ($repliesAll as $replyOne):
                                                if($replyOne['parent_comment_id']==$reply_comment_id){

                                                ?>
                                                <div class="panel panel-default replies" style="border: 1px solid black; padding: 8px; margin-bottom: 10px;">
                                                    <div class="panel-heading"><i><?php echo $replyOne['createdOn']; ?></i></div>
                                                    <div class="panel-body"><?php echo $replyOne['content']; ?></div>
                                                </div>
                                            <?php
                                                }
                                            endforeach;?>
                                        </div>

                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

