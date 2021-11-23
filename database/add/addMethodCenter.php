<?php
require '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO metodicheski_center(glavnoe, glavnoe_kz, glavnoe_en,
                    person_image, dolzhnost, dolzhnost_kz, dolzhnost_en,
                    fio, fio_kz, fio_en, 
                    stazh, stazh_kz, stazh_en,
                    obrazovanie, obrazovanie_kz, obrazovanie_en,
                    discipliny, discipliny_kz, discipliny_en,
                    category, category_kz, category_en,
                    qualification_course, qualification_course_kz, qualification_course_en
                    )
    VALUES ('".$_POST['glavnoe']."', '".$_POST['glavnoe_kz']."', '".$_POST['glavnoe_en']."',
            '".$_POST['person_image']."',
            '".$_POST['dolzhnost']."', '".$_POST['dolzhnost_kz']."', '".$_POST['dolzhnost_en']."',
            '".$_POST['fio']."', '".$_POST['fio_kz']."', '".$_POST['fio_en']."',
            '".$_POST['stazh']."', '".$_POST['stazh_kz']."', '".$_POST['stazh_en']."',
            '".$_POST['obrazovanie']."',  '".$_POST['obrazovanie_kz']."', '".$_POST['obrazovanie_en']."',
            '".$_POST['discipliny']."', '".$_POST['discipliny_kz']."', '".$_POST['discipliny_en']."',
            '".$_POST['category']."', '".$_POST['category_kz']."', '".$_POST['category_en']."',
            '".$_POST['qualification_course']."', '".$_POST['qualification_course_kz']."',  '".$_POST['qualification_course_en']."')";
    $res = mysqli_query($conn,$sql);
    if ($res == false) {
        echo mysqli_error($conn);
    }else{
        header("Location: http://localhost/kekk/methodCenter.php");
        exit;
    }
}

require 'methodCenterForm.php';
?>
