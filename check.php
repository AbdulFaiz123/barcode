<?php
$code =$_GET["code"];

$server = "localhost";
$user = "root";
$password = "";
$db = "create";
$sql = mysqli_connect($server,$user,$password,$db);

    $query = "SELECT * from string where name='$code'";
    $res = mysqli_query($sql, $query);
    $rows = mysqli_num_rows($res);
    if ($rows >= 1){

        header('Location:10.html');
    }
    else{
        header('Location:11.html');
    } 
?>
