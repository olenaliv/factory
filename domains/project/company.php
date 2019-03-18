<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Учет отпусков работников завода</title>
</head>
<body>
	<h2>Сотрудники, которые выбрали дату отпуска</h2>
	<form action = 'company.php' method="POST">
		<label>Дата от</label>
		<input type="date" name="dateFrom">
		<label>Дата после</label>
		<input type="date" name="dateInto">
		<input type="submit" name="search" value="Поиск">
	</form>
	<?php 
		$conn = @mysql_connect("localhost", "user", "user") or die("Ошибка подключения Mysql!");
		$db = @mysql_select_db("factory") or die("Ошибка подключения BD!");
		$part=$_GET['part'];

			if (isset($_POST['search'])){			
					$datefrom = $_POST['dateFrom'];
					$dateinto = $_POST['dateInto'];
					$sql="SELECT position.name, employees.name, vacation.date_from, vacation.date_into FROM position, employees, vacation WHERE position.id=employees.id_position AND employees.id = vacation.id_employees AND vacation.date_into<='$dateinto' AND vacation.date_from>='$datefrom'";
					$result = mysql_query($sql);	
			}
			else{
				$sql='SELECT position.name, employees.name, vacation.date_from, vacation.date_into FROM position, employees, vacation WHERE position.id=employees.id_position AND employees.id = vacation.id_employees';
				$result = mysql_query($sql);
			}

		$i=1;
		echo '<table width = 100% border = 1>
		<tr>
			<td><p class = "header">№ </p></td>
			<td><p class = "header">Должность</p></td>
			<td><p class = "header">ФИО</p></td>
			<td><p class = "header">Начало отпуска</p></td>
			<td><p class = "header">Конец отпуска</p></td>
		</tr>';

		while ($row=mysql_fetch_array($result))
		{echo 
			'<tr>
				<td><p>'.$i.'</p></td>
				<td><p>'.$row[0].'</p></td>
				<td><p>'.$row[1].'</p></td>
				<td><p>'.$row[2].'</p></td>
				<td><p>'.$row[3].'</p></td>
			</tr>';
		$i++;};
		echo '</table>';
	?>
	<br><H4><a href = "index.html">Вернуться на главную</a></H4>
</body>
</html>