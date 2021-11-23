<?php
function getNewsContent($conn, $id){
    $sql = "SELECT * from news where id=?";
    $stmt = mysqli_prepare($conn, $sql);//to avoid sql injection
    if ($stmt === false) {
        echo mysqli_error($conn);
    }else{
        mysqli_stmt_bind_param($stmt,"i", $id);// "i" because we are considering id
        //id is integer that is why we write i, if string we write "s"
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }
}

function getGosZakaz($conn){
    $sql = "SELECT * from gosobrazovatelnizakaz where id=1";
    $stmt = mysqli_prepare($conn, $sql);//to avoid sql injection
    if ($stmt === false) {
        echo mysqli_error($conn);
    }else{
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }
}

function getMethodCenter($conn, $id){
    $sql = "SELECT * from metodicheski_center where id=?";
    $stmt = mysqli_prepare($conn, $sql);//to avoid sql injection
    if ($stmt === false) {
        echo mysqli_error($conn);
    }else{
        mysqli_stmt_bind_param($stmt,"i", $id);// "i" because we are considering id
        //id is integer that is why we write i, if string we write "s"
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }
}
?>
