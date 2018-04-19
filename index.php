<?include 'functions_db.php';
include 'cart_functions.php';
session_start();

if (!isset($_SESSION['cart']))
{
    $_SESSION['cart']=array();
    $_SESSION['total_items']=0;
    $_SESSION['total_price']='0.00';
}
?>
<html>
	<head>
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<style>
			#test{display:none;}
		</style>
		<? include "blocks/head.php"; ?>
	</head>
	<header>
		<? include "blocks/header.php"; ?>
	</header>
	<body>
		<div class="wrapper">
			<div class="left">
                <?
                  $categories = get_cat();
                  foreach($categories as $item):
                ?>
			     <a href="cat.php ? catid=<?php echo $item['cat_id'] ?>"><?php echo $item['name'] ?></a>
                <?endforeach?> 
			</div>
            <div class="center">
				<div class="search">
					<form action="handler.php">
					   <p><input maxlength="25" size="40" placeholder="Поиск"></p>
					</form>
				</div>
				<a href="#" onClick="sdsd();">&#128269;</a>
                <?php
                $products = get_products();
                foreach($products as $item):?>
				<div class="product">
                        <a href="product.php ? id=<?php echo $item['id'] ?> ">
						<img src="./img/<?php echo $item['image'] ?>">
						<div class="name">
						<a href="#"><?php echo $item['name']?></a>	
						</div>
                        <div class="price">
						<a href="#"><?php echo $item['price']?></a>	
						</div>
					</a>
					<a href="add_to_cart_index.php ? id=<?php echo $item['id']?>" onClick="">
					<div class="But_AddProd">
						<div class="text">
							В корзину
						</div>
					</div>
					</a>
				</div>
            <?endforeach;?>
			</div>
			<div class="right">
				<? include "blocks/advert.php"; ?>
			</div>
		</div>
	</body>
	<footer>
		<? include "blocks/footer.php"; ?>
	</footer>
</html>