<?php
include "config.php";
$sql = "select * from images limit 2";
$query = mysqli_query($link, $sql);
while($data = mysqli_fetch_assoc($query)){
    $files[] = $data;
}
?>