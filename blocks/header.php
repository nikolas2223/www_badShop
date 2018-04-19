<div class="wrapper_head">
<?session_start();?>
			<div class="logo">
				<img src="https://s-media-cache-ak0.pinimg.com/736x/41/1a/48/411a4835d38ff899e55ce2802b08329c.jpg">
			</div>
			<div class="phone"><a href="tel:+88005553535"> 8-800-555-35-35 </a></div>
            <?if (!isset ($_SESSION['authid'])):?>
			<div class="login"><a href="#" id="show_logwin">Вход</a> <a href="#" id="show_reg">Регистрация</a></div>
            <?else:?>
            <div class="login"><a href="logout.php">Выход</a> </div>
            <?endif;?>
			<nav>
				<a href="index.php">Главная</a><a href="#">Помощь</a><a href="#">О нас</a><a href="/basket.php">Корзина</a>
			</nav>
</div>
<div id="overlay"></div>
<div id="logwin">
	<form action="auth.php">
		<h2>Авторизуйтесь</h2>
		<p>
			<label for="pol">Введите E-MAIL:</label>
			<input name="mail" type="email" placeholder="Vasya@Pupkin.ru" >
		</p>
		<p>
			<label for="pol">Введите пароль</label>
			<input name="pwd" type="password" placeholder="qwerty123456" >
		</p>
		<p>
			<input type="submit" value="Отправить" name="submitSend" id="send_logwin">
		</p>
		<div id="close_logwin"></div>
	</form>
</div>
<div id="reg">
	<form action="Reg.php">
		<h2>Регистрация</h2>
		<p><label for="pol">Введите E-MAIL:</label>
		<input name="mail" type="email" placeholder="Vasya@Pupkin.ru"></p>
		<p><label for="pol">Введите пароль</label>
		<input name="pwd" type="text" placeholder="qwerty123456"></p>
		<p><input type="submit" value="Отправить" name="submitReg" id="send_reg"></p>
		<div id="close_reg"></div>
	</form>
</div>