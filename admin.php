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
				<a href="#" onClick="sdsd();">&#128269;</a>
				<div class="just_text"><h1>Страница администратора</h1></div>
				<div class="just_text1">Пользователи</div>
				<div class="caption">
						<div class="name_c">Логин</div>
						<div class="adress">Пароль</div> 
						<div class="phonenumber">Допуск</div>
				</div>
				<div class="table">
					<? $category = get_users_admin();
                     foreach($category as $item):?>
                     <div class="string">
						<div class="name_c"><?php echo $item['Login']?></div>
						<div class="adress"><?php echo $item['Password']?></div> 
						<div class="phonenumber"><?php echo $item['Access']?></div>
					</div>
                <?endforeach;?>
				</div>
				<div class="just_text1">Список категорий для сортировки</div>
				<div class="table">
                    <? $category = get_categories_admin();
                     foreach($category as $item):?>
                     <div class="string">
                        <div class="name_c"><?php echo $item['cat_id']?></div>
					</div>
                <?endforeach;?>
				</div>
				<a href="#self" name="self" onclick="visAddForm()">Добавить тип товара</a>
				<div class="addForm" id="visForm">
					<form action="HAND.PHP">
						<input type="text" name="newtype" placeholder="Введите новое название типа"/>
						<input type="text" name="INDtype" placeholder="Индикатор"/>
						<input type="submit" name="addType" value="Добавить тип" class="button"/>
					</form>
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
	<script async src="js/AdForm.js"></script>
</html>