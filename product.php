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
			     <a href="index.php?view=cat ? cat_id=<?php echo $item['cat_id'] ?>"><?php echo $item['name'] ?></a>
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
                $id = $_GET['id'];
                $product = get_product($id);
                ?>
				<div class="img_prod">
					<img src="./img/<?php echo $product['image'] ?>">
				</div>
				<div class="description">
					<div class="name">
						<h2><?php echo $product['name']?></h2>
                        <?php echo $product['price']?>
					</div>
					<div class="decr">
						Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
					</div>
					<a href="add_to_cart.php?id=<?php echo $product['id']?>" onClick="">
					<div class="But_Add">
						<div class="text">
							В корзину
						</div>
					</div>
					</a>
				</div>
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