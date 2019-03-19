<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Учет отпусков работников завода</title>
</head>
<body>
	<h2>Добавление нового сотрудника</h2>
	<p>Заполните форму (все поля  обязательны)</p>
	<form method="post" action="add.php">
		<input type='hidden' name='id' value='$id' />
		<strong>ФИО сотрудника русскими буквами с пробелами</strong><br><br>
		<input type="text" placeholder="Иванов Иван Иванович" pattern="^[А-Яа-яЁё]+[\s]+[А-Яа-яЁё]+[\s]+[А-Яа-яЁё]+$" name="name"  minlength="10" maxlength="50" required /><br><br><br>
		<strong>Должность сотрудника</strong><br><br>
		<select name="position">
  			<option value="4">Должность 1</option>
			<option value="5">Должность 2</option>
			<option value="6">Должность 3</option>
			<option value="7">Должность 4</option>
		</select><br><br><br>
		<strong>Введите уникальный 3-значный номер сотрудника</strong><br><br>
		<input type="number" placeholder="111" name="number" min="0" max="999" required/><br><br><br>
		<input type="submit" name="add" value="Добавление"/>
	</form>
	<?php
		$conn = @mysql_connect("localhost", "user", "user") or die ("Ошибка соединения с MySQL");
		$db = @mysql_select_db("factory") or die ("Ошибка подключения к базе данных");

		if(isset($_POST['add'])){
			$name=strip_tags(trim($_POST['name']));
			$position=$_POST['position'];
			$number=strip_tags(trim($_POST['number']));
			
			mysql_query("
				INSERT INTO employees(name, id_position, number) 
				VALUES ('$name', '$position', '$number')
			");
			mysql_close();
			
			echo "Сотрудник добавлен";
		}	
	?>
	<br><br><H4><a href = "list.php">Список сотрудников завода</a></H4>
	<br><br><H4><a href = "index.html">Вернуться на главную</a></H4>
</body>
</html>