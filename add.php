<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="bg-dark" style="background-attachment:fixed">
<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
    $text_query = 'SELECT * FROM projects';
    $query = mysqli_query($connect, $text_query);
?>
<h1 class="text-light">ДОБАВИТЬ ПРОЕКТ</h1>
<div class="col-3 mt-2">
    	<form action="insert.php" method="GET">
		 <input type="file" name="img" ></input>
		 <input type="text" name="title" class="form-control mt-2" placeholder="Название">
		 <textarea name="text" class="form-control mt-2" placeholder="Описание"></textarea>
		 <input type="number" name="goal" class="form-control mt-2" placeholder="Цель">
		 <input type="number" name="donated" class="form-control mt-2" placeholder="Собрано">
		 <button type="submit" class="btn btn-primary mt-2">Добавить</button>
		</form>
</div>
</body>
</html>