<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">

<div class="cont dark">
<header><h1>Gallery</h1></header>
<div class="container">
    <div class="left_block"></div>
    <div class="content">
        <?php 
            include "config.php";
            $sql = "select * from goods";
            $query = mysqli_query($link, $sql);
            //$data = mysqli_fetch_assoc($query);
            while($data = mysqli_fetch_assoc($query)):?>
                <div class="im">
                    <a href="product.php?product_id=<?= $data['id']?>">
                        <img class="imgInA" width="200" src="big/<?= $data['photo']?>" alt="error">
                    </a>
                    <div class="info_block">
                        <div class="title_price">
                            <a class="title" href="product.php?product_id=<?= $data['id']?>"><?= $data['title']?></a>
                            <p class="price"><?= $data['price']?></p>
                        </div>
                        <button class="buy_btn">BUY</button>
                    </div>
                </div>
            <?php endwhile; ?>
        
    </div>
    <!--<div class="right_block">
        <form action="server.php" method="post" enctype="multipart/form-data">
            <p>Choose file</p>
            <input type="file" name="photo"><br><br>
            <input type="submit" value="Upload">
        </form>
    </div>-->
</div>
<footer>
    <p><?php echo date('Y F j');?></p>
</footer>
</div>

<div class="modal">
</div>

 <!--<script src="js/script.js"></script>-->