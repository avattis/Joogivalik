<?php
$host="localhost";
$user="test";
$pass="t3st3r123";
$db="test";
$link = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ");

mysqli_query($link, "SET CHARACTER SET UTF8")or die($sql. "-".mysqli_error($link));

$sql = "SELECT * FROM A4_drinks";
$result = mysqli_query($link, $sql) or die($sql. "-".mysqli_error($link));


while( $rida = mysqli_fetch_assoc($result)){
    echo "jook.php {$rida["name"]}</br>";
}

?>