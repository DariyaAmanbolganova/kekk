<?php
/*$db_host = '10.8.204.181';
$db_name = 'db1078695_ver';
$db_user = 'u1078695_dar';
$db_pass ='kvekkkst1003';*/

$db_host = '10.8.204.181';
$db_name = 'db1078695_ver';
$db_user = 'u1078695_dar';
$db_pass ='kvekkkst1003';

$conn = new mysqli($db_host,$db_user,$db_pass,$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
mysqli_set_charset($conn, 'utf8');
?>
