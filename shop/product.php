<?php
	include "config.php";
	$product_id = (int)($_GET['product_id']);
	$sql = "select * from goods where id=$product_id";
    $query = mysqli_query($link, $sql);
    $product = mysqli_fetch_assoc($query);
?>

<meta charset="utf-8">
<link rel="stylesheet" href="css/style_product.css">

<div class="container">
	<div class="img_block">
		<img src="big/<?= $product['photo']?>" alt="error">
	</div>
	<div class="descr_block">
		<h2><?= $product['title']?></h2>
		<p><?= $product['info']?></p>
		<div class="priceBuy">
			<p class="price">Price: <?= $product['price']?></p>
			<button class="buy_btn">BUY</button>
		</div>
	</div>
</div>