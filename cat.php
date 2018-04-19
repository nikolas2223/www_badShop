
<?include 'functions_db.php';?>

<html>
	<head>
		<? require_once "blocks/head.php"; ?>
	</head>
	<header>
		<? require_once "blocks/header.php"; ?>
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
            <?
                $cat = $_GET['catid'];
                $products = get_cat_products($cat);
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
					<a href="add_to_cart_cat.php?catid=<?php echo $item['category'] ?>" onClick="">
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
				Реклама
			</div>
		</div>
	</body>
	<footer>
		<? require_once "blocks/footer.php"; ?>
	</footer>
</html>
