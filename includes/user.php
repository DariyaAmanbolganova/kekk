<?php
session_start();
function connect(){
    $host="localhost";
    $pass="";
    $user="root";
    $db = "kekk";
    return mysqli_connect($host,$user,$pass,$db);
}
function Query($sql){

    return mysqli_query(connect(),$sql);

}

if (isset($_POST['username'])&&!isset($_POST['password'])){
    $user= $_POST['username'];
    $sql="select * from users where username = '$user'";
    $result = mysqli_fetch_assoc( Query($sql));
    $_SESSION['userID'] = $result['user_id'];

    if ($result==null){
        echo false;
    }else{
        echo true;

    }

}

if (isset($_POST['username'])&&isset($_POST['password'])){


    $user= $_POST['username'];
    $sql="select * from users where username = '$user'";
    $result = mysqli_fetch_assoc( Query($sql));
    if ($result['password']==$_POST['password'])
    {
        echo true;
        $_SESSION['user'] = [
            'username' => $result['username']
        ];
    }
    else {

        echo false;
    }

}
?>

