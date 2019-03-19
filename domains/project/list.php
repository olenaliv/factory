<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Учет отпусков работников завода</title>
</head>
<body>
	<h2>Список сотрудников</h2>
	<?php 
		$conn = @mysql_connect("localhost", "user", "user") or die("Ошибка подключения Mysql!");
		$db = @mysql_select_db("factory") or die("Ошибка подключения BD!");
		$sql = 'SELECT employees.id, employees.name, position.name, employees.number 
		FROM employees, position WHERE employees.id_position = position.id  ORDER BY employees.id';

		$result = mysql_query($sql);

		$i=1;

		echo '<table width = 100% border = 1><tr>
		<td><p class = "header">№ п.п</p></td>
		<td><p class = "header">ФИО</p></td>
		<td><p class = "header">Должность</p></td>
		<td><p class = "header">Табельный номер</p></td>
		<td><p class = "header">Действие</p></td></tr>';

		while ($row=mysql_fetch_array($result))
		{echo '<tr>
		<td><p>'.$row[0].'</p></td>
		<td><p>'.$row[1].'</p></td>
		<td><p>'.$row[2].'</p></td>
		<td><p>'.$row[3].'</p></td>
		<td><p><a href="delete.php?id='.$row[0].'">DELETE</a><br></p></td></tr>';
		$i++;};
		echo '</table>';
	?>
	<h4><a href="add.php">Добавить сотрудника</h4>
	<H4><a href = "index.html">Вернуться на главную</a></H4>
</body>
</html>
