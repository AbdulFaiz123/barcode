<?php
    $hash = $_GET['hash'];
    $server = "localhost";
$user = "root";
$password = "";
$db = "create";
$sql = mysqli_connect($server,$user,$password,$db);

    $query = "INSERT INTO string values('$hash')";
    $res = mysqli_query($sql, $query);
    echo "<script>console.log('works');</script>"; 
?>
