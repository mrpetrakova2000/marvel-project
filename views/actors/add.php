<?php include_once('./views/templates/header.php'); ?>

	<h1> Добавить актера: </h1>
	<form method = "POST">
		<form>
		  <div class="form-group">
			<label>Имя</label>
			<input type="text" name='actor_name' class="form-control">
		  </div>
		  <div class="form-group">
			<label>Фамилия</label>
			<input type="text" name='actor_surname' class="form-control">
		  </div>
		  <button type="submit" class="btn btn-primary">Отправить</button>
		</form>
		
	</form>
	
<?php include_once('./views/templates/footer.php'); ?>