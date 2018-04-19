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
			     <a href="cat.php ? cat_id=<?php echo $item['cat_id'] ?>"><?php echo $item['name'] ?></a>
                <?endforeach?> 
			</div>
            <div class="center">
				<div class="search">
						<form action="handler.php">
						   <p><input maxlength="25" size="40" placeholder="Поиск"></p>
						</form>
				</div>
				<form action="Handler1.php">
				<div class="order">
					<div class="form">
                        <input type="text" placeholder="Название" name="name" />
                        <input type="text" placeholder="Цена" name="price" />
                        <input type="text" placeholder="Описание" name="description" />
                        <input type="text" placeholder="Ссылка на фото" name="image" />
                        <select name="category">
                        <? $category = get_categories_admin();
                     foreach($category as $item):?>
                            <option value="<?php echo $item['cat_id']?>"><?php echo $item['name']?></option>
                     <?endforeach;?>
                        </select>
					</div>
					<input type="submit" class="button" name="order" value="Добавить товар"/>
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