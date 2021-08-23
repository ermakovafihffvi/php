<?php
include "config.php";
$sql = "select * from images";
$query = mysqli_query($link, $sql);
while($data = mysqli_fetch_assoc($query)){
    $files[] = $data;
}
?>