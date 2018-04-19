<?include 'functions_db.php';
session_start()?>

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
			     <a href="cat.php ? cat_id=<?php echo $item['cat_id'] ?>"><?php echo $item['name'] ?></a>
                <?endforeach?> 
			</div>
            <div class="center">
				<div class="search">
					<form action="handler.php">
					   <p><input maxlength="25" size="40" placeholder="Поиск"></p>
					</form>
				</div>
				<a href="#" onClick="sdsd();">&#128269;</a>
				<div class="just_text"><h1>Оформление заказа</h1></div>
				<div class="selected">
                <?foreach($_SESSION['cart'] as $id => $quantity):
                  $item = get_product($id);         
                ?>
					<div class="ordered_prod">
						<div class="text">
						<a href="#"><?php echo $item['name']?></a>	
						</div>
						<div class="func">
							<a href="delete_quantity.php ? id=<?echo $id;?>" onClick="">-</a>
							<input maxlength="2" size="40" name="<?echo $id;?>" value="<? echo $quantity?>" disabled id="count">
							<a href="add_quantity.php ? id=<?echo $id;?>" onclick="">+</a>
						</div>
					</div>
                    <?endforeach;?>
				</div>
                <form action="Handler.php">
					<div class="order">
						<div class="form">
							<input type="text" placeholder="Фамилия"  name="s_name" />
							<input type="text" placeholder="Имя" name="name" />
							<input type="text" placeholder="Адрес" name="address" />
							<input type="text" placeholder="Номер телефона" name="tel_number" />
						</div>
						<input type="submit" class="button" name="order" value="заказать"/>
					</div>
                </form>
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
