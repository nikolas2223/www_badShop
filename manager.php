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
			     <a href="index.php?view=cat & cat_id=<?php echo $item['cat_id'] ?>"><?php echo $item['name'] ?></a>
                <?endforeach?> 
			</div>
            <div class="center">
				<div class="search">
					<form action="handler.php">
					   <p><input maxlength="25" size="40" placeholder="Поиск"></p>
					</form>
				</div>
				<a href="#" onClick="sdsd();">&#128269;</a>
				<div class="just_text1">Товары</div>
				<div class="caption">
						<div class="name_p">Имя</div>
						<div class="price">Цена</div> 
						<div class="type">Категория</div>
				</div>
				<div class="table">
                    <?php
                    $products = get_products();
                     foreach($products as $item):?>
					 <div class="string">
						<div class="name_p"><?php echo $item['name']?></div>
						<div class="price">	<?php echo $item['price']?></div> 
						<div class="type">	<?php echo $item['category']?></div>
					 </div>
                    <?endforeach;?>
				</div>
				<div class="just_text1">Заказы</div>
				<div class="caption">
					<div class="S1">Имя</div>
					<div class="S2">Стоимость</div> 
					<div class="S3">Количество</div>
					<div class="S4">Заказчик</div>
				</div>
                					
				<div class="table">
                <?$orders = get_orders();
                     foreach($orders as $item):
                ?>
					<div class="string">
						<div class="S1"><?php echo $item['product']?></div>
						<div class="S2"><?php echo $item['price']?></div> 
						<div class="S3"><?php echo $item['quantity']?></div>
						<div class="S4"><?php echo $item['s_name']?></div>
					</div>
                <?endforeach;?>
				</div>
                <a href="addproduct.php" onClick="">Добавить продукт</a>
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