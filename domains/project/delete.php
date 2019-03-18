<?php
	$conn = @mysql_connect("localhost","root") or die ("Ошибка соединения с MySQL");

	$db = @mysql_select_db("factory") or die ("Ошибка подключения к базе данных");

	$id = $_GET['id'];

	$sql = "DELETE FROM employees WHERE id=".$id."";

	$result = mysql_query($sql);
	header('location: list.php');
?>