<?php 
  $connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");

  $insert = "INSERT INTO projects(img, title, text, goal, donated) VALUES ('{$_GET['img']}', '{$_GET['title']}', '{$_GET['text']}', '{$_GET['goal']}', '{$_GET['donated']}')";

  $result_insert = mysqli_query($connect, $insert);
  
  header("Location: index.php")
?>