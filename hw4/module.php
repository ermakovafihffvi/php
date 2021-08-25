<?php

if(isset($_POST['start_id'])){
    $start_id = $_POST['start_id'];
    $limit = $_POST['limit'];

    include "config.php";
    $sql = "select * from images where id>=$start_id limit $limit";
    $query = mysqli_query($link, $sql);
    while($data = mysqli_fetch_assoc($query)){
        $files[] = $data;
    }
    echo json_encode($files);
    //$files = "jhkhk";
    //$start_id = $_POST["start_id"];
    //echo json_encode($_POST['start_id']);
}

/*$files = "jhkhk";
echo $files;*/


