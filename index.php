<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">

<div class="cont dark">
<header><h1>Gallery</h1></header>
<div class="container">
    <div class="left_block"></div>
    <div class="content">
        <?php 
            include "config.php";
            $sql = "select * from images";
            $query = mysqli_query($link, $sql);
            //$data = mysqli_fetch_assoc($query);
            //print_r($data);
            while($data = mysqli_fetch_assoc($query)):?>
                <?php //print_r($data); ?>
                <a class="im" href="fullImage.php?img=<?= $data['path']?>">
                    <img width="200" src="small/<?= $data['path']?>" alt="error">
                </a>
            <?php endwhile; ?>
        
    </div>
    <div class="right_block">
        <form action="server.php" method="post" enctype="multipart/form-data">
            <p>Choose file</p>
            <input type="file" name="photo"><br><br>
            <input type="submit" value="Upload">
        </form>
    </div>
</div>
<footer>
    <p><?php echo date('Y F j');?></p>
</footer>
</div>

<div class="modal">
</div>

 <!--<script src="js/script.js"></script>-->